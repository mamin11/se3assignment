<x-guest-layout>
    {{-- <div class="container mx-auto flex flex-col items-center justify-center ">
        BID HERE
    </div> --}}

    <div class="min-w-screen min-h-screen bg-white-800 flex items-center p-5 lg:p-10 overflow-hidden relative">
        <div class="w-full max-w-6xl rounded bg-white shadow-xl p-10 lg:p-20 mx-auto text-gray-800 relative md:text-left">
            <div class="md:flex items-center -mx-10">
                <div class="w-full md:w-1/2 px-10 mb-10 md:mb-0">
                    <div class="relative">
                        <img src="{{ Voyager::image(json_decode($product->images)[0]) }}" class="w-full relative z-10" alt="">
                        <div class="border-4 border-yellow-600 absolute top-10 bottom-10 left-10 right-10 z-0"></div>
                    </div>
                </div>
                <div class="w-full md:w-1/2 px-10">
                    <div class="mb-10">
                        <h1 class="font-bold uppercase text-2xl mb-5">{{$product->title}}</h1>
                        <p class="text-sm mb-3">{{$product->description}}</p>
                        <h4 class="text-lg tracking-wide mb-3"><span class="font-semibold">Artist:</span> {{$product->artist_name}} </h4>
                        <h4 class="text-lg tracking-wide mb-3"><span class="font-semibold">Year:</span> {{$product->year_produced}} </h4>
                        <h4 class="text-lg tracking-wide mb-3"><span class="font-semibold">Category:</span> {{$product->getCategory()->name}} </h4>
                        <h4 class=" text-lg tracking-wide mb-3"><span class="font-semibold">Estimated Price:</span> £{{$product->price_start}} - £{{$product->price_end}}</h4>
                        @if($product->medium_used) <h4 class="text-lg tracking-wide mb-3"><span class="font-semibold">Medium:</span> {{$product->medium_used}} </h4> @endif
                        @if($product->is_framed) <h4 class="text-lg tracking-wide mb-3"><span class="font-semibold">Framed:</span> {{$product->is_framed ? 'Yes' : 'No'}} </h4> @endif
                        @if($product->dimension) <h4 class="text-lg tracking-wide mb-3"><span class="font-semibold">Dimensions:</span> {{$product->dimension}} </h4> @endif
                        @if($product->material_used) <h4 class="text-lg tracking-wide mb-3"><span class="font-semibold">Material:</span> {{$product->material_used}} </h4> @endif
                        @if($product->weight) <h4 class="text-lg tracking-wide mb-3"><span class="font-semibold">Weight:</span> {{$product->weight}} kg </h4> @endif
                        @if($product->image_type) <h4 class="text-lg tracking-wide mb-3"><span class="font-semibold">Image Type:</span> {{$product->image_type}}  </h4> @endif

                    </div>
                    <div>
                        <div class="inline-block align-bottom mr-5">
                            <span class="text-2xl leading-none text-green-300 align-baseline">£</span>
                            <span class="font-bold text-green-300 text-5xl leading-none align-baseline">{{$product->price_start}}</span>
                            <span class="text-2xl text-green-300 leading-none align-baseline">.00</span>
                        </div>
                        <div class="inline-block align-bottom">
                            <button class="bg-red-600 opacity-75 text-white rounded-full px-10 py-2 font-semibold"><i class="mdi mdi-cart -ml-2 mr-2"></i> LATEST BID</button>
                        </div>
                    </div>
                    <div class="my-10">
                        <h4 class=" tracking-wide mb-3 text-2xl"><span class="font-semibold text-2xl text-red-600">Closing in:</span> 00:05:49 </h4>
                        <input type="number" placeholder="Place Bid" class="focus:outline-none focus:ring focus:border-blue-300 opacity-75" />
                            <button class="bg-blue-800 opacity-85 hover:bg-blue-900 text-white font-bold py-2 px-4 rounded">
                                Button
                            </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>