<div>
    <div class="max-w-xl w-full rounded-lg shadow-lg my-10 p-4 flex md:flex-row flex-col">
        <div class="flex-1">
            <h3 class="font-semibold text-lg tracking-wide">BID CALLS</h3>

            <div class="inline-block mr-2 mt-2">
                <button type="button" wire:click='call1' class="focus:outline-none text-white text-sm py-2.5 px-5 rounded-md bg-green-500 hover:bg-green-600 hover:shadow-lg">First Call {{$call1->status}}</button>
            </div>

            <div class="inline-block mr-2 mt-2">
                <button type="button" wire:click='call2' class="focus:outline-none text-white text-sm py-2.5 px-5 rounded-md bg-green-500 hover:bg-green-600 hover:shadow-lg">Seocnd Call {{$call2->status}}</button>
            </div>

            <div class="inline-block mr-2 mt-2">
                <button type="button" wire:click='call3' class="focus:outline-none text-white text-sm py-2.5 px-5 rounded-md bg-red-500 hover:bg-red-600 hover:shadow-lg">Third Call {{$call3->status}}</button>
            </div>

            <div class="inline-block mr-2 mt-2">
                <button type="button" wire:click='resetCalls' class="focus:outline-none text-white text-sm py-2.5 px-5 rounded-md bg-gray-700 hover:bg-gray-900 hover:shadow-lg">Reset Calls</button>
            </div>

            <div class="inline-block mr-2 mt-2">
                <button wire:click="sold" type="button" class="focus:outline-none text-white text-sm py-2.5 px-5 rounded-md bg-blue-500 hover:bg-blue-600 hover:shadow-lg">Call SOLD {{$sold->status}}</button>
            </div>

        </div>
        <div class="md:px-2 mt-3 md:mt-0 items-center flex">
        </div>
    </div>
</div>
