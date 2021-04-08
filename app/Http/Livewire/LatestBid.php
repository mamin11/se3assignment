<?php

namespace App\Http\Livewire;

use Livewire\Component;

class LatestBid extends Component
{
    public $product;
    public $latestBid = 0;

    public function mount($product) {
        $this->product = $product;
        if($this->product->getLatestBidding()){
            $this->latestBid = $this->product->getLatestBidding()->bid;
        }
    }
    public function render()
    {
        return view('livewire.latest-bid');
    }
}
