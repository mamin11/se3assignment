<?php

namespace App\Http\Controllers;

use App\Auction;
use App\Product;
use App\AuctionItem;
use Illuminate\Http\Request;

class AuctionController extends Controller
{
    public function index() {
        $date = date("Y-m-d");
        $auctions = Auction::where('date', '>=', $date)->get();
        return view('auction')->with('auctions', $auctions);
    }

    public function viewone($id) {
        $date = date("Y-m-d");
        $auction = Auction::where('id', $id)->first();
        $items = AuctionItem::where('auction_id', $auction->id)->paginate(9);
        return view('auction-single')->with([
            'auction' => $auction,
            'items' => $items
        ]);
    }

    public function openitem($id) {
        $product = Product::where('id', $id)->first();
        return view('product-bidding')->with([
            'product' => $product
        ]);
    }
}
