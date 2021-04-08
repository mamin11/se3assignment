<?php

namespace App;

use App\AuctionItem;
use App\ProductBidding;
use App\ProductCategory;
use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    public function getCategory() {
        return ProductCategory::where('id', $this->category_id)->first();
    }

    public function getLatestBidding() {
        $aucItem = AuctionItem::where('product_id', $this->id)->first();
        $bid = ProductBidding::where('auction_item_id', $aucItem->id)->orderBy('created_at', 'desc')->first();
        if($bid){
            return $bid;
        }
        return;
    }

    public function getBiddding() {
        $aucItem = AuctionItem::where('product_id', $this->id)->first();
        return ProductBidding::where('auction_item_id', $aucItem->id)->get();
    }
}
