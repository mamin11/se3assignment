<?php

namespace App\Http\Livewire;

use App\BidCall;
use App\AuctionItem;
use App\Models\User;
use App\ProductBidding;
use Livewire\Component;

class BidCalls extends Component
{
    public $calls;
    public $call1;
    public $call2;
    public $call3;
    public $sold;
    public $product;
    public $aucItem;

    public function mount() {
        $this->calls = BidCall::all();
        $this->call1 = BidCall::where('id', 1)->first();
        $this->call2 = BidCall::where('id', 2)->first();
        $this->call3 = BidCall::where('id', 3)->first();
        $this->sold = BidCall::where('id', 4)->first();

        $this->aucItem = AuctionItem::where('product_id', $this->product->id)->first();
    }

    public function call1(){
        // dd('call 1');
        $this->call1->status = 1;
        $this->sold->status = 0;
        $this->sold->save();
        $this->call1->save();
    }
    
    public function call2(){
        $this->call2->status = 1;
        $this->sold->status = 0;
        $this->sold->save();
        $this->call2->save();
    }
    
    public function call3(){
        $this->call3->status = 1;
        $this->sold->status = 0;
        $this->sold->save();
        $this->call3->save();
    }
    
    public function sold(){
        $this->sold->status = 1;
        $this->call1->status = 0;
        $this->call2->status = 0;
        $this->call3->status = 0;
        $this->call1->save();
        $this->call2->save();
        $this->call3->save();
        $this->sold->save();

        //find the highest bidder
        $latestBid = ProductBidding::where('auction_item_id', $this->aucItem->id)->orderBy('created_at', 'desc')->first();
        $highestBidder = User::where('id', $latestBid->user_id)->first();

        //sell the product. Log buyer id
        $this->product->sold = 1;
        $this->product->buyer_id = $highestBidder->id;
        $this->product->save();

        //deactivate the auction item
        $this->aucItem->active = 0;
        $this->aucItem->save();
    }
    
    public function resetCalls(){
        $this->call1->status = 0;
        $this->call2->status = 0;
        $this->call3->status = 0;
        $this->sold->status = 0;
        $this->call1->save();
        $this->call2->save();
        $this->call3->save();
        $this->sold->save();
    }

    public function render()
    {
        return view('livewire.bid-calls');
    }
}
