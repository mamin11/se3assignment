<?php

namespace App\Http\Livewire;

use App\AuctionItem;
use App\ProductBidding;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Bid extends Component
{
    public $product;
    public $price;
    
    //custom validation messages
    private $customMessages = [
        'required' => 'Please enter a value',
        'unique' => 'This amount has already been placed',
        'string' => 'This needs to be a string',
        'integer' => 'This needs to be a number',
        'max' => 'The number exceeds the maximum (:max) allowed',
        'numeric' => 'Please enter a number value',
    ];

    public function placeBid() {
        $aucItem = AuctionItem::where('product_id', $this->product->id)->first();
        
        //get latest bid
        $latestbid = ProductBidding::where('auction_item_id', $aucItem->id)->orderBy('created_at', 'desc')->first();

        //rules
        $rules = [
            'price' => 'required|unique:product_biddings,bid'
        ];

        //validate
        $validatedData = $this->validate($rules, $this->customMessages);
        
        //only allow new bid if it is higher than latest
        if($this->price > $latestbid->bid){
    
            //create bid
            ProductBidding::create([
                'user_id' => Auth::user()->id,
                'auction_item_id' => $aucItem->id,
                'bid' => $this->price,
            ]);
    
            //redirect to refresh
            return redirect()->route('bidonitem', ['id' => $aucItem->id]);
        }
        
        return;

    }
    
    public function render()
    {
        return view('livewire.bid');
    }
}
