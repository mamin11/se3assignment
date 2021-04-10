<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MyItemsController extends Controller
{
    public function index() {
        // dd('my items');
        $soldItems = Product::where('seller_id', Auth::user()->id)->paginate(9);
        $boughtItems = Product::where('buyer_id', Auth::user()->id)->paginate(9);

        return view('dashboard')->with([
            'soldItems' => $soldItems,
            'boughtItems' => $boughtItems
        ]);
    }

    public function services() {
        $services = ProductCategory::all();
        return view('services')->with('services', $services);
    }
}
