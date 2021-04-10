<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AuctionStatusLink extends Component
{
    public $item;
    
    public function render()
    {
        return view('livewire.auction-status-link');
    }
}
