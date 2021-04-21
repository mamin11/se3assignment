<div wire:poll>
    @if($call1->status || $call2->status || $call3->status)
    <div class="alert flex flex-row items-center {{$call3->status ? 'bg-red-500' : 'bg-yellow-200'}} p-5 rounded border-b-2 {{$call3->status ? 'border-red-400' : 'border-yellow-300'}} ">
        <div class="alert-icon flex items-center {{$call3->status ? 'bg-red-400' : 'bg-yellow-100'}} border-2 {{$call3->status ? 'border-red-500' : 'border-yellow-500'}}  justify-center h-10 w-10 flex-shrink-0 rounded-full">
            <span class="{{$call3->status ? 'text-white' : 'text-yellow-500'}} ">
                <svg fill="currentColor"
                        viewBox="0 0 20 20"
                        class="h-6 w-6">
                    <path fill-rule="evenodd"
                            d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z"
                            clip-rule="evenodd"></path>
                </svg>
            </span>
        </div>
        <div class="alert-content ml-4">
            <div class="alert-title font-semibold text-lg {{$call3->status ? 'text-white' : 'text-gray-600'}}">
                {{$call3->status ? 'FINAL CALL' : 'CALLING....'}}
            </div>
            <div class="alert-description text-sm {{$call3->status ? 'text-white' : 'text-gray-600'}} " wire:poll>
                {{$call3->status ? 'This is the final call at £'..'.00' : 'This item will be sold after next call'}}
            </div>
        </div>
    </div>
    @elseif($sold->status)
    <div class="alert flex flex-row items-center bg-green-200 p-5 rounded border-b-2 border-green-300">
        <div class="alert-icon flex items-center bg-green-100 border-2 border-green-500 justify-center h-10 w-10 flex-shrink-0 rounded-full">
            <span class="text-green-500">
                <svg fill="currentColor"
                    viewBox="0 0 20 20"
                    class="h-6 w-6">
                    <path fill-rule="evenodd"
                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                        clip-rule="evenodd"></path>
                </svg>
            </span>
        </div>
        <div class="alert-content ml-4">
            <div class="alert-title font-semibold text-lg text-green-800">
                Success
            </div>
            <div class="alert-description text-sm text-green-600">
                This is item has been sold to the highest bidder!
            </div>
        </div>
    </div>
    @endif
</div>
