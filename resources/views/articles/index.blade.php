<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Nos actualités') }}
        </h2>
    </x-slot>

    <div class="grid justify-items-center mt-5">
        <div class=" grid grid-cols-2 bg-oxley-400 bg-opacity-75 rounded-lg ">
            @foreach($articles as $article)

                    <div class="m-5 bg-oxley-200 text-center rounded-lg">
                    <img src="{{$article->img}}" class="rounded-lg justify-items-center">
                    <h2>{{$article->title}}</h2>
                    <p>{{$article->description}}</p>
                    <h3>{{$article->category->title}}</h3>
                    <button class="uppercase px-2 py-1 rounded-full bg-blue-300 text-blue-600 max-w-max shadow-sm hover:shadow-lg">{{'#'.$article->tags[0]->title}}</button><br>
                    </div>

            @endforeach
        </div>
    </div>



</x-app-layout>


