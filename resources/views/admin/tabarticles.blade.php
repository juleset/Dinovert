<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Vous êtes connecté en tant qu\'admin') }}
        </h2>
    </x-slot>
    <div class="grid justify-items-center mt-5 mb-5">
        <div class="grid-cols-3 flex md:space-x-10 lg:space-x-20 text-center justify-items-center">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                <table class="table-auto">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Image</th>
                        <th>Titre</th>
                        <th>Description</th>
                        <th>Categorie</th>
                        <th>Tag</th>


                    </tr>
                    </thead>
                    <tbody>
                    @foreach($articles as $article)
                        <tr>
                            <td>{{$article -> id}}</td>
                            <td>{{$article -> img}}</td>
                            <td>{{$article -> title}}</td>
                            <td>{{$article -> description}}</td>
                            <td>{{$article -> category -> title}}</td>
                            <td>{{$article -> tags[0] -> title}}</td>
{{--                            <td>{!!Form::open(['method'=>'DELETE','route'=>['articles.destroy',$article->id]])!!}--}}
{{--                                {{Form::submit('Supprimer')}}--}}
{{--                                {!!Form::close()!!}</td>--}}
                            <td>{!!Form::open()!!}
                                {{Form::submit('Modifier')}}
                                {!!Form::close()!!}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

                <div class="text-6xl">
                    <a href="{{url('article/create')}}">
                        <button>Ajouter un bien</button>
                    </a>
                </div>
            </div>
        </div>
    </div>


</x-app-layout>
