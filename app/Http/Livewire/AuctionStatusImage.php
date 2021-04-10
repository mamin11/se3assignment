<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AuctionStatusImage extends Component
{
    public $item;
    
    public function render()
    {
        return view('livewire.auction-status-image');
    }
}
