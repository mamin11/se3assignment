<?php

namespace App\Http\Livewire;

use App\AuctionItem;
use App\ProductBidding;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Bid extends Component
{
    public $product;
    public $aucItem;
    public $price;
    public $endSale = false;
    
    protected $listeners = ['timeUp'];

    public function mount() {
        $this->aucItem = AuctionItem::where('product_id', $this->product->id)->first();
    }

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
        
        //get latest bid
        $latestbid = ProductBidding::where('auction_item_id', $this->aucItem->id)->orderBy('created_at', 'desc')->first();

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
                'auction_item_id' => $this->aucItem->id,
                'bid' => $this->price,
            ]);
    
            $this->emitTo('latest-bid', 'newBid');
            $this->price = '';
            //redirect to refresh
            // return redirect()->route('bidonitem', ['id' => $this->aucItem->id]);
        }
        
        // return;

    }

    public function timeUp() {
        $this->endSale = true;

        //sell the item

        //set sold to true
    }
    
    public function render()
    {
        return view('livewire.bid');
    }
}
