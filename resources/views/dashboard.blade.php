<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}
    
    {{-- <x-jet-welcome /> --}}
    {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            </div>
        </div>
    </div> --}}

    <div class="container-fluid mx-auto flex flex-col  md:flex-row items-center md:justify-between sm:justify-center">

        <div class="container-fluid mx-auto flex flex-col items-center justify-center ">
            <h1 class="text-center font-semibold text-2xl">BOUGHT ITEMS</h1>

            <div class="flex justify-center mb-5">
                <div class="grid md:grid-cols-1 sm:grid-cols-1 gap-4 mt-10">
                    @foreach ($boughtItems as $item)
                        <a  href="/bidding/{{$item->id}}">
                            <div class="max-w-lg w-full rounded-lg shadow-lg p-5 transform transition duration-500 hover:scale-105 cursor-pointer">
                                <h3 class="font-semibold text-lg tracking-wide">{{$item->title}}.</h3>
                                <h4 class="text-lg tracking-wide"><span class="font-semibold">Artist:</span> {{$item->artist_name}} </h4>
                                <p class="text-gray-500 my-1">
                                    {{$item->description}}
                                </p>
                                <h4 class=" text-lg tracking-wide"><span class="font-semibold">Estimated Price:</span> £{{$item->price_start}} - £{{$item->price_end}}</h4>
                                <p class="w-1/2 float-left">@livewire('auction-status-image', ['item' => $item], key($item->id))</p><br>
                                <span class="text-red-500 font-bold mb-5 float-left"><span class="text-gray-900 font-bold">{{$item->getLatestBidding() ? $item->getLatestBidding()->created_at->diffForHumans() : ''}}: </span>{{$item->getLatestBid()}}</span></p>
                            </div>
                        </a>
                    @endforeach

                </div>
            </div>

            <div class="flex justify-center mb-5">
                <div class="grid md:grid-cols-3 sm:grid-cols-1 gap-4 mt-10">
                    {{$boughtItems->links()}}
                </div>
            </div>
        </div>

        <div class="container-fluid mx-auto flex flex-col items-center justify-center ">
            <h1 class="text-center font-semibold text-2xl">SOLD ITEMS</h1>

            <div class="flex justify-center mb-5">
                <div class="grid md:grid-cols-1 sm:grid-cols-1 gap-4 mt-10">
                    @foreach ($soldItems as $item)
                        <a  href="/bidding/{{$item->id}}">
                            <div class="max-w-lg w-full rounded-lg shadow-lg p-5 transform transition duration-500 hover:scale-105 cursor-pointer">
                                <h3 class="font-semibold text-lg tracking-wide">{{$item->title}}.</h3>
                                <h4 class="text-lg tracking-wide"><span class="font-semibold">Artist:</span> {{$item->artist_name}} </h4>
                                <p class="text-gray-500 my-1">
                                    {{$item->description}}
                                </p>
                                <h4 class=" text-lg tracking-wide"><span class="font-semibold">Estimated Price:</span> £{{$item->price_start}} - £{{$item->price_end}}</h4>
                                <p class="w-1/2 float-left">@livewire('auction-status-image', ['item' => $item], key($item->id))</p><br>
                                <span class="text-red-500 font-bold mb-5 float-left"><span class="text-gray-900 font-bold">{{$item->getLatestBidding() ? $item->getLatestBidding()->created_at->diffForHumans() : ''}}: </span>{{$item->getLatestBid()}}</span></p>
                            </div>
                        </a>
                    @endforeach

                </div>
            </div>

            <div class="flex justify-center mb-5">
                <div class="grid md:grid-cols-3 sm:grid-cols-1 gap-4 mt-10">
                    {{$boughtItems->links()}}
                </div>
            </div>
        </div>

    </div>

</x-app-layout>
