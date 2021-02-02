<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Nos actualités') }}
        </h2>
    </x-slot>

    <div class="grid justify-items-center mt-5">
        <div class=" grid grid-cols-2 bg-oxley-400 bg-opacity-75 rounded-lg ">
            @foreach($articles as $article)
                <div class="grid grid-cols-1 m-5 bg-white text-center rounded-lg">
                    <img src="{{$article->img}}" class="rounded-lg">
                    <h1>{{$article->title}}</h1>
                    <h1>{{$article->description}}</h1>
                    <h1>{{$article->category->title}}</h1>
                    <h1>{{$article->tags[0]->title}}</h1>
                </div>
            @endforeach
        </div>
    </div>



</x-app-layout>


