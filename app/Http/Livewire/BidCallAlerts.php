<?php

namespace App\Http\Livewire;

use App\BidCall;
use App\AuctionItem;
use App\ProductBidding;
use Livewire\Component;

class BidCallAlerts extends Component
{
    public $call1;
    public $call2;
    public $call3;
    public $sold;

    public $latestbid;
    public $product;

    public function mount() {
        $this->call1 = BidCall::where('id', 1)->first();
        $this->call2 = BidCall::where('id', 2)->first();
        $this->call3 = BidCall::where('id', 3)->first();
        $this->sold = BidCall::where('id', 4)->first();

        $aucItem = AuctionItem::where('product_id', $this->product->id)->first();
        $this->latestbid = ProductBidding::where('auction_item_id', $aucItem->id)->orderBy('created_at', 'desc')->first();
    }
    public function render()
    {
        return view('livewire.bid-call-alerts');
    }
}
