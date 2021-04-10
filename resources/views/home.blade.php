<x-app-layout>
<div class="flex flex-col">
    <div class="container-fluid flex flex-wrap md items-center h-screen">
        <div class="bg-white w-full md:w-1/2 h-screen">
        <div class="mx-32">
            <h1 class="text-6xl font-bold mt-16 text-red-900">Fotheby's Auction Houses</h1>

            <div class="flex mt-16 font-light text-gray-500">
            <div class="pr-4">
                <span class="uppercase">United Kingdom</span>
                <p class="text-2xl text-gray-900 font-semibold pt-2">London</p>
            </div>
            <div class="pr-4">
                <span class="uppercase">United States</span>
                <p class="text-2xl text-gray-900 font-semibold pt-2">New York</p>
            </div>
            <div class="pr-4">
                <span class="uppercase">Switzerland</span>
                <p class="text-2xl text-gray-900 font-semibold pt-2">Geneva</p>
            </div>
            </div>

            <div
            class="description w-full sm: md:w-2/3 mt-16 text-gray-500 text-sm"
            >
            Fotheby’s is an international auction house specialising in the sale of fine artLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </div>
        </div>
        </div>
        <div class="bg-red-600 w-full md:w-1/2 h-screen">
        <img
            src="{{asset('img/museum2.jpg')}}"
            class="h-screen w-full"
            alt=""
        />
        </div>
    </div>
    {{-- here ends here  --}}

    
<div class="container-fluid min-w-screen  bg-white px-5 py-5">

    
    <div class="w-full mx-auto bg-white px-5 py-10 text-gray-600 mb-10">
        <div class="text-center max-w-xl mx-auto">
            <h1 class="text-5xl md:text-6xl font-bold mb-5 text-red-900">Services We Offer</h1>
            <h3 class="text-xl font-medium mb-10">Lorem ipsum dolor sit amet consectetur adipisicing elit repellat dignissimos laboriosam odit accusamus porro</h3>
        </div>
        <div class="max-w-4xl mx-auto md:flex">
            <div class="w-full md:w-1/3 md:max-w-none bg-white px-8 md:px-10 py-8 md:py-10 mb-3 mx-auto md:my-6 rounded-md shadow-lg shadow-gray-600 md:flex md:flex-col">
                <div class="w-full flex-grow">
                    <h2 class="text-center font-bold uppercase mb-4">{{$paintings ? $paintings->name : 'Paintings'}}</h2>
                    <ul class="text-sm px-5 mb-8">
                        <li class="leading-tight"><i class="mdi mdi-check-bold text-lg"></i> {{$paintings ?  Str::limit($paintings->description, 200, '...') : 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Quis reprehenderit harum tempore maxime libero minima! Modi labore consectetur, dolore tempore iste reprehenderit quibusdam distinctio esse pariatur perspiciatis maiores earum laboriosam 
                        voluptatem nesciunt vel deserunt eius accusamus dicta! Minus aut, aperiam aliquam distinctio, quae dolorem aspernatur, id tempore itaque commodi sapiente voluptates corporis quo? Corrupti 
                        cum esse ea eveniet ratione! Odit unde quisquam ab voluptatum nulla exercitationem ratione recusandae. Aperiam itaque accusantium amet facilis reiciendis eligendi quis asperiores illo, 
                        adipisci ut doloribus. Modi corrupti ad alias! Commodi eaque accusamus modi aspernatur, vitae iusto earum dolorem distinctio in voluptatum eligendi nulla provident explicabo necessitatibus id! 
                        Eveniet minus necessitatibus laborum error asperiores iure voluptas illum tempora dicta aliquam soluta repudiandae iusto sequi nemo molestiae in minima expedita, consequatur sit commodi. Perferendis 
                        blanditiis soluta hic earum! Eligendi hic cumque magnam quod dolorem qui beatae voluptatum itaque temporibus perferendis nihil modi quisquam tempora nisi autem, natus aspernatur facilis distinctio ratione 
                        officia quaerat. Quisquam deserunt numquam sunt nisi perspiciatis quia soluta nobis officia nam mollitia optio doloribus rem officiis harum recusandae aut atque dignissimos accusantium nesciunt, eaque fugiat 
                        cupiditate porro. Nisi fugiat dolore, obcaecati earum molestiae perspiciatis, magnam blanditiis totam in sunt eaque amet similique voluptatum.'}}</li>
                    </ul>
                </div>
                <div class="w-full">
                </div>
            </div>
            <div class="w-full md:w-1/3 md:max-w-none bg-white px-8 md:px-10 py-8 md:py-10 mb-3 mx-auto md:-mx-3 md:mb-0 rounded-md shadow-lg shadow-gray-600 md:relative md:z-50 md:flex md:flex-col">
                <div class="w-full flex-grow">
                    <h2 class="text-center font-bold uppercase mb-4">{{$prints ? $prints->name : 'Prints'}}</h2>
                    <ul class="text-sm px-5 mb-8">
                        <li class="leading-tight"><i class="mdi mdi-check-bold text-lg truncate"></i> {{$prints ?  Str::limit($prints->description, 200, '...') : 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                            Quis reprehenderit harum tempore maxime libero minima! Modi labore consectetur, dolore tempore iste reprehenderit quibusdam distinctio esse pariatur perspiciatis maiores earum laboriosam 
                            voluptatem nesciunt vel deserunt eius accusamus dicta! Minus aut, aperiam aliquam distinctio, quae dolorem aspernatur, id tempore itaque commodi sapiente voluptates corporis quo? Corrupti 
                            cum esse ea eveniet ratione! Odit unde quisquam ab voluptatum nulla exercitationem ratione recusandae. Aperiam itaque accusantium amet facilis reiciendis eligendi quis asperiores illo, 
                            adipisci ut doloribus. Modi corrupti ad alias! Commodi eaque accusamus modi aspernatur, vitae iusto earum dolorem distinctio in voluptatum eligendi nulla provident explicabo necessitatibus id! 
                            Eveniet minus necessitatibus laborum error asperiores iure voluptas illum tempora dicta aliquam soluta repudiandae iusto sequi nemo molestiae in minima expedita, consequatur sit commodi. Perferendis 
                            blanditiis soluta hic earum! Eligendi hic cumque magnam quod dolorem qui beatae voluptatum itaque temporibus perferendis nihil modi quisquam tempora nisi autem, natus aspernatur facilis distinctio ratione 
                            officia quaerat. Quisquam deserunt numquam sunt nisi perspiciatis quia soluta nobis officia nam mollitia optio doloribus rem officiis harum recusandae aut atque dignissimos accusantium nesciunt, eaque fugiat 
                            cupiditate porro. Nisi fugiat dolore, obcaecati earum molestiae perspiciatis, magnam blanditiis totam in sunt eaque amet similique voluptatum.'}}</li>
                    </ul>
                </div>
                <div class="w-full flex justify-center">
                    <a href="/services" class="font-bold bg-red-800 hover:bg-red-900 text-white rounded-md px-10 py-2 transition-colors w-full text-center">See More</a>
                </div>
            </div>
            <div class="w-full md:w-1/3 md:max-w-none bg-white px-8 md:px-10 py-8 md:py-10 mb-3 mx-auto md:my-6 rounded-md shadow-lg shadow-gray-600 md:flex md:flex-col">
                <div class="w-full flex-grow">
                    <h2 class="text-center font-bold uppercase mb-4">{{$sculptures ? $sculptures->name : 'Sculptures'}}</h2>
                    <ul class="text-sm px-5 mb-8">
                        <li class="leading-tight"><i class="mdi mdi-check-bold text-lg"></i>{{$sculptures ? Str::limit($sculptures->description, 200, '...') : 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                            Quis reprehenderit harum tempore maxime libero minima! Modi labore consectetur, dolore tempore iste reprehenderit quibusdam distinctio esse pariatur perspiciatis maiores earum laboriosam 
                            voluptatem nesciunt vel deserunt eius accusamus dicta! Minus aut, aperiam aliquam distinctio, quae dolorem aspernatur, id tempore itaque commodi sapiente voluptates corporis quo? Corrupti 
                            cum esse ea eveniet ratione! Odit unde quisquam ab voluptatum nulla exercitationem ratione recusandae. Aperiam itaque accusantium amet facilis reiciendis eligendi quis asperiores illo, 
                            adipisci ut doloribus. Modi corrupti ad alias! Commodi eaque accusamus modi aspernatur, vitae iusto earum dolorem distinctio in voluptatum eligendi nulla provident explicabo necessitatibus id! 
                            Eveniet minus necessitatibus laborum error asperiores iure voluptas illum tempora dicta aliquam soluta repudiandae iusto sequi nemo molestiae in minima expedita, consequatur sit commodi. Perferendis 
                            blanditiis soluta hic earum! Eligendi hic cumque magnam quod dolorem qui beatae voluptatum itaque temporibus perferendis nihil modi quisquam tempora nisi autem, natus aspernatur facilis distinctio ratione 
                            officia quaerat. Quisquam deserunt numquam sunt nisi perspiciatis quia soluta nobis officia nam mollitia optio doloribus rem officiis harum recusandae aut atque dignissimos accusantium nesciunt, eaque fugiat 
                            cupiditate porro. Nisi fugiat dolore, obcaecati earum molestiae perspiciatis, magnam blanditiis totam in sunt eaque amet similique voluptatum.'}} </li>
                    </ul>
                </div>
                <div class="w-full">
                </div>
            </div>
        </div>
    </div>

</div>


    {{-- newsletter starts here  --}}
    <div class="container-fluid  bg-white flex flex-col justify-center items-center py-10">
        <form action="/newsletter" method="POST">
        <div class="text-center max-w-xl mx-auto">
            <h1 class="text-5xl md:text-6xl font-bold mb-5 text-red-900">Subscribe to Our Newsletter</h1>
        </div>
        <div class='flex justify-between max-w-md p-1 bg-white shadow-lg rounded-full overflow-hidden mx-auto'>
        
            <input type="email" class="outline-none border-none focus:outline-none focus:border-none focus:none outline:none @error('email') border-red-500 @enderror w-96 p-2 pl-4 " name="email" placeholder="johndoe@mail.com" required/>
        @csrf
        <button class="flex-end bg-green-600 w-64 text-white font-bold text-2xl px-8 py-3 outline-none rounded-full text-center uppercase">SUBSCRIBE</button>
        
        </div>
    </form>
    </div>
    {{-- newletter ends here  --}}

</div>
</x-app-layout>