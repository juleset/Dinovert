<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Page d\'accueil') }}
        </h2>
    </x-slot>

        <div class="grid justify-items-center ">
            <div class="">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">

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
                                {{$properties[0]->location}}
                            </div>
                        </div>
                        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                            <div>
                                <img src="{{$properties[1]->img}}">
                            </div>
                            <div class="">
                                {{$properties[1]->price.' €'}}
                            </div>
                            <div>
                                {{$properties[1]->surface.' m²'}}
                            </div>
                            <div>
                                {{$properties[1]->location}}
                            </div>
                        </div>
                        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                            <div>
                                <img src="{{$properties[2]->img}}">
                            </div>
                            <div class="">
                                {{$properties[2]->price.' €'}}
                            </div>
                            <div>
                                {{$properties[2]->surface.' m²'}}
                            </div>
                            <div>
                                {{$properties[2]->location}}
                            </div>
                        </div>
                    </div>
                </div>
        </div>

</x-app-layout>
