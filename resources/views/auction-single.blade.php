<x-guest-layout>
    <div class="container mx-auto flex flex-col items-center justify-center ">

        <div class="max-w-xl w-full rounded-lg shadow-lg my-10 p-4 flex md:flex-row flex-col">
            <div class="flex-1">
                <h3 class="font-semibold text-lg tracking-wide">{{$auction->title}}.</h3>
                <p class="text-gray-500 my-1">
                    This Auction will start on <span class="text-green-300 font-semibold">{{$auction->date}}</span> at <span class="text-green-300 font-semibold">{{$auction->time}}</span>. It will be held at <b>{{$auction->location}}</b>. 
                </p>
            </div>
            <div class="md:px-2 mt-3 md:mt-0 items-center flex">
            </div>
        </div>

        <div class="container-fluid mx-auto flex flex-col items-center justify-center ">
            <h1 class="text-center font-semibold text-2xl">LISTED ITEMS</h1>

            <div class="flex justify-center mb-5">
                <div class="grid md:grid-cols-3 sm:grid-cols-1 gap-4 mt-10">
                    @foreach ($items as $item)
                        <a @if($item->active) href="/bidding/{{$item->id}}" @endif >
                            <div class="max-w-lg w-full rounded-lg shadow-lg p-4 transform transition duration-500 hover:scale-105 cursor-pointer">
                                <img class="w-full rounded-md" src="{{ Voyager::image(json_decode($item->getProductImage())[0]) }}" alt="product image" />
                                <h3 class="font-semibold text-lg tracking-wide">{{$item->getProduct()->title}}.</h3>
                                <h4 class="text-lg tracking-wide"><span class="font-semibold">Artist:</span> {{$item->getProduct()->artist_name}} </h4>
                                <p class="text-gray-500 my-1">
                                    {{$item->getProduct()->description}}
                                </p>
                                <h4 class=" text-lg tracking-wide"><span class="font-semibold">Estimated Price:</span> £{{$item->getProduct()->price_start}} - £{{$item->getProduct()->price_end}}</h4>
                                <p class="text-red-500 font-bold py-8">@if($item->active) <img class="float-left " src="https://img.icons8.com/emoji/40/000000/green-circle-emoji.png"/> @else <img class="float-left" src="https://img.icons8.com/emoji/40/fa314a/red-circle-emoji.png"/> @endif
                                    <span class="text-red-500 font-bold  float-right"><span class="text-gray-900 font-bold">{{$item->getLatestBidding() ? $item->getLatestBidding()->created_at->diffForHumans() : ''}}: </span>{{$item->getLatestBid()}}</span></p>
                            </div>
                        </a>
                    @endforeach

                </div>
            </div>

            <div class="flex justify-center mb-5">
                <div class="grid md:grid-cols-3 sm:grid-cols-1 gap-4 mt-10">
                    {{$items->links()}}
                </div>
            </div>
        </div>

    </div>
</x-guest-layout>