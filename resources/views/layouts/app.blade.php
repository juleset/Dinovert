<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <x-jet-banner />

        <div class="min-h-screen bg-color3">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            <header class="bg-white shadow bg-gray-100">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>

                <div class="">
                    <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">

                    </div>
                    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">

                        @auth
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-jet-dropdown-link href="{{ route('logout') }}"
                                                     onclick="event.preventDefault();
                                        this.closest('form').submit();">
                                    {{ __('Deconnexion') }}
                                </x-jet-dropdown-link>
                            </form>
                            {{--                    @else--}}
                            {{--                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>--}}

                            {{--                        @if (Route::has('register'))--}}
                            {{--                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>--}}
                            {{--                        @endif--}}
                        @endauth
                    </div>
                </div>
            </header>

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
        <!-- FOOTER -->
        <div class=" bg-grey-lighter p-8 bg-blue-bayoux-600 ">
            <div class=" justify-items-center">
{{--                <div class="sm:w-1/2 h-auto">--}}
{{--                    <div class="text-orange mb-2">Orange</div>--}}
{{--                    <ul class="list-reset leading-normal">--}}
{{--                        <li class="hover:text-orange text-grey-darker">One</li>--}}
{{--                        <li class="hover:text-orange text-grey-darker">Two</li>--}}
{{--                        <li class="hover:text-orange text-grey-darker">Three</li>--}}
{{--                        <li class="hover:text-orange text-grey-darker">Four</li>--}}
{{--                        <li class="hover:text-orange text-grey-darker">Five</li>--}}
{{--                        <li class="hover:text-orange text-grey-darker">Six</li>--}}
{{--                        <li class="hover:text-orange text-grey-darker">Seven</li>--}}
{{--                        <li class="hover:text-orange text-grey-darker">Eight</li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
                <div class=" text-center ">
                    <div class="text-red-light mb-2">Newsletter</div>
                    <p class="text-grey-darker leading-normal">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, consectetur. </p>
                    <div class="mt-4 justify-items-center ">
                        <input type="text" class="p-2 border border-grey-light round text-grey-dark text-sm h-auto" placeholder="Votre adresse mail ...">
                        <button class="bg-oxley-600 text-white rounded-sm h-auto text-xs p-3">S'inscrire</button>
                    </div>
                </div>

{{--                <img src="Projet%20DINOVERT/img/dino.png">--}}

            </div>
        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>
