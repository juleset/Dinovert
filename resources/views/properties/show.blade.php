<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Page d\'accueil') }}
        </h2>
    </x-slot>

    <div class="grid justify-items-center ">
        <div class="">
            <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                <!--LOGO-->
            </div>
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                    @endif
                @endauth
            </div>
        </div>
        <div class="container">
            <div>
                <h2 class="font-semibold text-xl text-white leading-tight">Nos derniers bien à vendre</h2>
            </div>
            <div class="grid-cols-3 flex md:space-x-10 lg:space-x-20 text-center">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div>
                        <img src="{{$properties[0]->img}}">
                    </div>
                    <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                        {{$properties[0]->price.' €'}}
                    </div>
                    <div>
                        {{$properties[0]->surface.' m²'}}
                    </div>
                    <div>
                        {{$properties[0]->condition}}
                    </div>
                    <div>
                        {{$properties[0]->location}}
                    </div>
                    <div>
                        {{$properties[0]->description}}
                    </div>
                </div>

                </div>
            </div>
        </div>

    </div>



    <div class=" bg-grey-lighter p-8 bg-blue-bayoux-600">
        <div class="sm:flex mb-4">
            <div class="sm:w-1/2 h-auto">
                <div class="text-orange mb-2">Orange</div>
                <ul class="list-reset leading-normal">
                    <li class="hover:text-orange text-grey-darker">One</li>
                    <li class="hover:text-orange text-grey-darker">Two</li>
                    <li class="hover:text-orange text-grey-darker">Three</li>
                    <li class="hover:text-orange text-grey-darker">Four</li>
                    <li class="hover:text-orange text-grey-darker">Five</li>
                    <li class="hover:text-orange text-grey-darker">Six</li>
                    <li class="hover:text-orange text-grey-darker">Seven</li>
                    <li class="hover:text-orange text-grey-darker">Eight</li>
                </ul>
            </div>

            <div class="sm:w-1/2 sm:mt-0 mt-8 h-auto">
                <div class="text-red-light mb-2">Newsletter</div>
                <p class="text-grey-darker leading-normal">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, consectetur. </p>
                <div class="mt-4 flex">
                    <input type="text" class="p-2 border border-grey-light round text-grey-dark text-sm h-auto" placeholder="Your email address">
                    <button class="bg-orange text-white rounded-sm h-auto text-xs p-3">Subscribe</button>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
