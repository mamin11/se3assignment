<div>
    <label class="flex items-center relative w-max cursor-pointer select-none" >
        {{-- wire:click='$toggle("status")' --}}
        <span class="text-lg font-bold mr-3">Active</span>
        <input wire:click='toggle'  @if($status == 1) checked @else unchecked @endif id="status" type="checkbox" class="appearance-none transition-colors cursor-pointer w-14 h-7 rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-black focus:ring-blue-500 bg-red-500" />
        <span class="absolute font-medium text-xs uppercase right-1 text-white"> OFF </span>
        <span class="absolute font-medium text-xs uppercase right-8 text-white"> ON </span>
        <span class="w-7 h-7 right-7 absolute rounded-full transform transition-transform bg-gray-200"></span>
    </label>
</div>
