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
        <div class="container">

            <div class="grid grid-rows-1 justify-items-center ">
                {!! Form::open()!!}
                <div>
                    {{Form::label('Type de bien: ')}}
                    {{Form::select('title', \App\Models\Type::pluck('title'), null, ['placeholder' => '--Choisir un type--'])}}
                </div>
                <div>
                    {{Form::label('Prix: ')}}
                    {{Form::number('price',null)}}
                </div>
                <div>
                    {{Form::label('Surface (m²): ')}}
                    {{Form::number('surface',null)}}
                </div>
                <div>
                    {{Form::label('Etat: ')}}
                    {{Form::select('condition', \App\Models\Property::groupBy('condition')->pluck('condition'), null, ['placeholder' => '--Choisir un état--'])}}
                </div>
                <div>
                    {{Form::label('Année de construction: ')}}
                    {{Form::number('constructionYear',null)}}
                </div>
                <div>
                    {{Form::label('image: ')}}
                    {{Form::file('image',null)}}
                </div>
                <div>
                    {{Form::label('description: ')}}
                    {{Form::textarea('description',null)}}
                </div>
                {{Form::submit('Envoyer')}}
                {!! Form::close() !!}
            </div>

        </div>
    </div>




</x-app-layout>
