<div wire:poll>
    @if($product->sold === false && $aucItem->active === true)
        <input type="number" wire:model='price' placeholder="Place Bid" @guest disabled @endguest class="focus:outline-none focus:ring focus:border-blue-300 opacity-75" />
        <button @guest disabled @endguest class="bg-blue-800 opacity-85 hover:bg-blue-900 text-white font-bold py-2 px-4 rounded" wire:click='placeBid'>
            BID
        </button>

        @error('price')
            <span class="error text-red-700" role="alert">
                <br><strong>{{ $message }}</strong><br>
            </span>
        @enderror
    @else
    <button @guest disabled @endguest class="bg-red-600 opacity-85 hover:bg-red-600 text-white font-bold py-2 px-4 rounded">
        {{$product->sold == true ? 'SOLD' : 'IN-ACTIVE'}}
    </button>
    @endif
</div>
