<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Vous êtes connecté en tant qu\'admin') }}
        </h2>
    </x-slot>

    <div class="grid justify-items-center ">
        <div class="grid-cols-3 flex md:space-x-10 lg:space-x-20 text-center justify-items-center">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                <table>
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Prix</th>
                        <th>Localisation</th>
                        <th>surface</th>
                        <th>Nb pieces</th>
                        <th>état</th>
                        <th>Année construction</th>
                        <th>Description</th>
                        <th>Images</th>
                        <th></th>
                        <th></th>
                        <th>type de bien</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($properties as $property)
                        <tr>
                            <td>{{$property -> id}}</td>
                            <td>{{$property -> price}}</td>
                            <td>{{$property -> location}}</td>
                            <td>{{$property -> surface}}</td>
                            <td>{{$property -> roomNumber}}</td>
                            <td>{{$property -> condition}}</td>
                            <td>{{$property -> constructionYear}}</td>
                            <td>{{$property -> decription}}</td>
        {{--                    <td><a href="{{route('posts.show',['id' => $property->id])}}">{{$property -> title}}</a></td>--}}

                            @foreach($property->images as $img)
                            <td>{{$img -> img}}</td>
                            @endforeach

        {{--                    <td>{{$property -> created_date_formated}}</td>--}}
        {{--                    <td>{{$property -> category -> title ?? 'Pas de Catégorie'}}</td>--}}
                            <td>{{$property -> type -> title}}</td>
        {{--                    <td>{!!Form::open(['method'=>'DELETE','route'=>['posts.delete',$article->id]])!!}--}}
        {{--                        {{Form::submit('Supprimer')}}--}}
        {{--                        {!!Form::close()!!}</td>--}}
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
