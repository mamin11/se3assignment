<x-guest-layout>
    <div class="container mx-auto flex justify-center ">
        <!-- component -->
            <form class="w-full max-w-lg my-5" method="POST" action="/contact">
                @csrf
                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                        Name
                        </label>
                        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border @error('name') {{'border-red-500'}} @enderror rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" name="name" id="grid-first-name" type="text" value="{{old('name')}}">
                        @error('name')<p class="text-red-500 text-xs italic">Please fill out this field.</p>@enderror
                    </div>
                </div>

                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                        E-mail
                        </label>
                        <input class="appearance-none block w-full @error('email') {{'border-red-500'}} @enderror bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="email" id="email" type="email" value="{{old('email')}}">
                        @error('email')<p class="text-red-500 text-xs italic">Please fill out this field.</p>@enderror
                    </div>
                </div>

                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                        Subject
                        </label>
                        <input class="appearance-none block w-full @error('subject') {{'border-red-500'}} @enderror bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="subject" id="subject" type="text" value="{{old('subject')}}">
                        @error('subject')<p class="text-red-500 text-xs italic">Please fill out this field.</p>@enderror
                    </div>
                </div>

                <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                    Message
                    </label>
                    <textarea class=" no-resize appearance-none @error('message') {{'border-red-500'}} @enderror block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 h-48 resize-none" name="message" id="message">{{old('message')}}</textarea>
                    @error('message')<p class="text-red-500 text-xs italic">Please fill out this field.</p>@enderror
                    {{-- <p class="text-gray-600 text-xs italic">Re-size can be disabled by set by resize-none / resize-y / resize-x / resize</p> --}}
                </div>
                </div>
                <div class="md:flex md:items-center mb-5">
                <div class="md:w-1/3">
                    <button class="shadow bg-green-500 hover:bg-green-300 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded " type="submit">
                    Send
                    </button>
                </div>
                <div class="md:w-2/3"></div>
                </div>
                
                @if (session('message'))
                    <div class="bg-green-100  rounded-b text-green-900 mx-5 px-4 py-3 shadow-md" role="alert">
                        <div class="flex">
                            <div>
                            <p class="text-sm">Your message was successfully sent</p>
                            </div>
                        </div>
                    </div>
                @endif

            </form>
    </div>

        <div class="container-fluid">            
            <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:text-3xl sm:truncate text-center">PREVIOUSLY ASKED QUESTIONS</h2>
            

            <div class="flex justify-center mb-5">
                <div class="grid md:grid-cols-3 sm:grid-cols-1 gap-4 mt-10">
                    @foreach ($messages as $message)
                        <div>
                            <div class="max-w-lg w-full rounded-lg shadow-lg p-4">
                                <h3 class="font-semibold text-lg tracking-wide">{{$message->title}}.</h3>
                                <p class="text-gray-500 my-1">
                                    {{$message->message}}
                                </p>
                                <h4 class="font-semibold text-lg tracking-wide">Answered: {{$message->updated_at->diffForHumans()}}</h4>
                                <p class="text-gray-500 my-1">
                                    {{$message->reply}}
                                </p>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>

            <div class="flex justify-center mb-5">
                <div class="grid md:grid-cols-3 sm:grid-cols-1 gap-4 mt-10">
                    {{$messages->links()}}
                </div>
            </div>

        </div>
</x-guest-layout>