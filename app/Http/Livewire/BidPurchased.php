<?php

namespace App\Http\Livewire;

use Livewire\Component;

class BidPurchased extends Component
{
    public $product;
    
    public function render()
    {
        return view('livewire.bid-purchased');
    }
}
