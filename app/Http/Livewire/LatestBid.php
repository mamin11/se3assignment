<?php

namespace App\Http\Livewire;

use Livewire\Component;

class LatestBid extends Component
{
    public $product;
    public $latestBid = 0;

    protected $listeners = ['newBid' => 'updated'];

    public function mount() {
        // $this->product = $product;
        if($this->product->getLatestBidding()){
            $this->latestBid = $this->product->getLatestBidding()->bid;
        }
    }

    public function updated() {
        // dd('updated');
        $this->mount();
    }

    public function render()
    {
        return view('livewire.latest-bid');
    }
}
