<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Page d\'accueil') }}
        </h2>
    </x-slot>

        <div class="relative flex items-top justify-center min-h-screen dark:bg-gray-900 sm:items-center sm:pt-0">
            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
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


                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-6">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel.com/docs" class="underline text-gray-900 dark:text-white">Documentation</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    {{$properties[0]->price}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>



    <div class=" bg-grey-lighter p-8 bg-blue-bayoux-500">
        <div class="sm:flex mb-4">
            <div class="sm:w-1/4 h-auto">
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
            <div class="sm:w-1/4 h-auto sm:mt-0 mt-8">
                <div class="text-blue mb-2">Blue</div>
                <ul class="list-reset leading-normal">
                    <li class="hover:text-blue text-grey-darker">One</li>
                    <li class="hover:text-blue text-grey-darker">Two</li>
                    <li class="hover:text-blue text-grey-darker">Three</li>
                </ul>

                <div class="text-blue-light mb-2 mt-4">Blue-light</div>
                <ul class="list-reset leading-normal">
                    <li class="hover:text-blue-light text-grey-darker">One</li>
                    <li class="hover:text-blue-light text-grey-darker">Two</li>
                    <li class="hover:text-blue-light text-grey-darker">Three</li>
                </ul>

            </div>
            <div class="sm:w-1/4 h-auto sm:mt-0 mt-8">
                <div class="text-green-dark mb-2">Green-dark</div>
                <ul class="list-reset leading-normal">
                    <li class="hover:text-green-dark text-grey-darker">One</li>
                    <li class="hover:text-green-dark text-grey-darker">Two</li>
                    <li class="hover:text-green-dark text-grey-darker">Three</li>
                </ul>

                <div class="text-green-light mb-2 mt-4">Green-light</div>
                <ul class="list-reset leading-normal">
                    <li class="hover:text-green-light text-grey-darker">One</li>
                    <li class="hover:text-green-light text-grey-darker">Two</li>
                    <li class="hover:text-green-light text-grey-darker">Three</li>
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
