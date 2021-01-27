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
            </header>

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
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
                {{--            <div class="sm:w-1/4 h-auto sm:mt-0 mt-8">--}}
                {{--                <div class="text-blue mb-2">Blue</div>--}}
                {{--                <ul class="list-reset leading-normal">--}}
                {{--                    <li class="hover:text-blue text-grey-darker">One</li>--}}
                {{--                    <li class="hover:text-blue text-grey-darker">Two</li>--}}
                {{--                    <li class="hover:text-blue text-grey-darker">Three</li>--}}
                {{--                </ul>--}}

                {{--                <div class="text-blue-light mb-2 mt-4">Blue-light</div>--}}
                {{--                <ul class="list-reset leading-normal">--}}
                {{--                    <li class="hover:text-blue-light text-grey-darker">One</li>--}}
                {{--                    <li class="hover:text-blue-light text-grey-darker">Two</li>--}}
                {{--                    <li class="hover:text-blue-light text-grey-darker">Three</li>--}}
                {{--                </ul>--}}

                {{--            </div>--}}
                {{--            <div class="sm:w-1/4 h-auto sm:mt-0 mt-8">--}}
                {{--                <div class="text-green-dark mb-2">Green-dark</div>--}}
                {{--                <ul class="list-reset leading-normal">--}}
                {{--                    <li class="hover:text-green-dark text-grey-darker">One</li>--}}
                {{--                    <li class="hover:text-green-dark text-grey-darker">Two</li>--}}
                {{--                    <li class="hover:text-green-dark text-grey-darker">Three</li>--}}
                {{--                </ul>--}}

                {{--                <div class="text-green-light mb-2 mt-4">Green-light</div>--}}
                {{--                <ul class="list-reset leading-normal">--}}
                {{--                    <li class="hover:text-green-light text-grey-darker">One</li>--}}
                {{--                    <li class="hover:text-green-light text-grey-darker">Two</li>--}}
                {{--                    <li class="hover:text-green-light text-grey-darker">Three</li>--}}
                {{--                </ul>--}}


                {{--            </div>--}}
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

        @stack('modals')

        @livewireScripts
    </body>
</html>
