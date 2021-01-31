<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ajout d\'un bien') }}
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
        <div class="container ">

            <div class="grid grid-rows-1 justify-items-center ">
                {!! Form::open(['route' => ['properties.store']])!!}
            <table class="bg-oxley-500 bg-opacity-90">
                <tr>
                    <td>{{Form::label('Type de bien: ')}}</td>
                    <td>{{Form::select('type_id', \App\Models\Type::pluck('title', 'id'), null, ['placeholder' => '--Choisir un type--'])}}</td>
                </tr>
                <tr>
                    <td>{{Form::label('Prix: ')}}</td>
                    <td>{{Form::number('price',null)}}</td>
                </tr>
                <tr>
                    <td>{{Form::label('Localisation: ')}}</td>
                    <td>{{Form::text('location',null)}}</td>
                </tr>
                <tr>
                    <td>{{Form::label('Surface (m²): ')}}</td>
                    <td>{{Form::number('surface',null)}}</td>
                </tr>
                <tr>
                    <td>{{Form::label('Nombre de pièces: ')}}</td>
                    <td>{{Form::number('roomNumber',null)}}</td>
                </tr>
                <tr>
                    <td>{{Form::label('Etat: ')}}</td>
                    <td>{{Form::text('condition',null)}}</td>
                </tr>
                <tr>
                    <td>{{Form::label('Année de construction: ')}}</td>
                    <td>{{Form::number('constructionYear',null)}}</td>
                </tr>
                <tr>
                    <td>{{Form::label('image: ')}}</td>
                    <td>{{Form::file('image',null)}}</td>
                </tr>
                <tr>
                    <td>{{Form::label('description: ')}}</td>
                    <td>{{Form::textarea('description',null)}}</td>
                </tr>
                <tr>
                    <td>{{Form::submit('Envoyer')}}</td>
                </tr>
                {!! Form::close() !!}
                </div>
            </table>
        </div>
    </div>




</x-app-layout>
