<?php

namespace App\Http\Livewire;

use Livewire\Component;

class BidTimer extends Component
{
    public $timer;
    public $minutes;
    public $seconds;

    protected $listeners = ['timeUp'];
    
    public function timeUp() {
        // dd('time up');
        $this->emitTo('bid', 'timeUp');
    }

    public function render()
    {
        return view('livewire.bid-timer');
    }
}
