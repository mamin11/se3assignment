<?php

namespace App\Http\Livewire;

use App\AuctionItem;
use Livewire\Component;

class AuctionStatus extends Component
{
    public $product;
    public $aucItem;
    public $status;

    public function mount() {
        $this->aucItem = AuctionItem::where('product_id', $this->product->id)->first();
        $this->status = $this->aucItem->active;
        // dd($this->status);
    }

    public function toggle(){
        // dd($this->status);
        if($this->status == 1) {
            $this->status = 0;
            // dd('changed to false');
            $this->aucItem->active = $this->status;
            $this->aucItem->save();
        }
        else if($this->status == 0) {
            $this->status = 1;
            // dd('changed to true');
            $this->aucItem->active = $this->status;
            $this->aucItem->save();
        }
    }

    public function render()
    {
        return view('livewire.auction-status');
    }
}
