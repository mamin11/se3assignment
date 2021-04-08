<?php

namespace App;

use App\Product;
use App\ProductBidding;
use Illuminate\Database\Eloquent\Model;


class AuctionItem extends Model
{
    public function getProduct() {
        return Product::where('id', $this->product_id)->first();
    }

    public function getProductImage() {
        $prod = Product::where('id', $this->product_id)->first();
        return $prod->images;
    }

    public function getLatestBid() {
        $bid = ProductBidding::where('auction_item_id', $this->id)->orderBy('created_at', 'desc')->first();
        if($bid){
            return '£'.$bid->bid;
        }
        return;
    }

    public function getLatestBidding() {
        $bid = ProductBidding::where('auction_item_id', $this->id)->orderBy('created_at', 'desc')->first();
        if($bid){
            return $bid;
        }
        return;
    }

    public function getBiddding() {
        return ProductBidding::where('auction_item_id', $this->id)->get();
    }
}
