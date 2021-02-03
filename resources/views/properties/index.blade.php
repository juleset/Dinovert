<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tous nos biens') }}
        </h2>
    </x-slot>

    <div class="grid justify-items-center mt-5">
        <div class=" grid grid-cols-2 bg-oxley-400 bg-opacity-75 rounded-lg ">
            @foreach($properties as $property)
                <div class="grid grid-cols-1 m-5 bg-white text-center rounded-lg">
                    <a href="{{url('/properties/index/detail/' . $property->id )}}">
                    <img src="{{$property->images[0]->img}}" class="rounded-lg">
                    </a>

                    <p>{{$property->price.' €'}}</p>
                    <p>{{$property->location}}</p>
                    <p>{{$property->surface.' m²'}}</p>
                </div>
            @endforeach
        </div>
    </div>



</x-app-layout>

