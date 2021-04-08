<x-guest-layout>
    <div class="container mx-auto flex flex-col items-center justify-center ">
        @foreach($auctions as $auction)
        <div class="max-w-xl w-full rounded-lg shadow-lg my-10 p-4 flex md:flex-row flex-col transform transition duration-500 hover:scale-105">
            <div class="flex-1">
                <h3 class="font-semibold text-lg tracking-wide">{{$auction->title}}.</h3>
                <p class="text-gray-500 my-1">
                    This Auction will start on <span class="text-green-300 font-semibold">{{$auction->date}}</span> at <span class="text-green-300 font-semibold">{{$auction->time}}</span>. It will be held at <b>{{$auction->location}}</b>. To find out more please click on the link
                </p>
            </div>
            <div class="md:px-2 mt-3 md:mt-0 items-center flex">
                <a href="/auction/{{$auction->id}}" class="bg-blue-500 text-white font-bold px-4 py-2 text-sm uppercase rounded tracking-wider focus:outline-none hover:bg-blue-600"> Click Here</a>
            </div>
        </div>
        @endforeach
    </div>
</x-guest-layout>