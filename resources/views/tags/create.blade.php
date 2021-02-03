<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ajout d\'un tag') }}
        </h2>
    </x-slot>

    <div class="grid justify-items-center ">
        {{--        <div class="">--}}
        {{--            <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">--}}
        {{--                <!--LOGO-->--}}
        {{--            </div>--}}
        {{--            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">--}}
        {{--                @auth--}}
        {{--                    <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>--}}
        {{--                @else--}}
        {{--                    <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>--}}

        {{--                    @if (Route::has('register'))--}}
        {{--                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>--}}
        {{--                    @endif--}}
        {{--                @endauth--}}
        {{--            </div>--}}
        {{--        </div>--}}
        <div class="container">

            <div class="grid grid-rows-1 justify-items-center ">
                {!! Form::open(['route' => ['tags.store']])!!}
                <table class="bg-oxley-500 bg-opacity-90">
                    <tr>
                        <td>{{Form::label('Titre: ')}}</td>
                        <td>{{Form::text('title',null)}}</td>
                    </tr>
                    <tr>
                        <td>{{Form::label('slug: ')}}</td>
                        <td>{{Form::text('slug',null)}}</td>
                    </tr>
                    <tr>
                        <td>{{Form::submit('Créer')}}</td>
                    </tr>
                {!! Form::close() !!}

            </table>
        </div>
        </div>
    </div>




</x-app-layout>

