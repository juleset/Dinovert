<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Vous êtes connecté en tant qu\'admin') }}
        </h2>
    </x-slot>

    <div class="grid justify-items-center mt-5 ">
        <div class="grid-cols-3 flex md:space-x-10 lg:space-x-20 text-center justify-items-center">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                <table class="table-auto ">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Prix</th>
                        <th>Localisation</th>
                        <th>Surface</th>
                        <th>Nb pieces</th>
                        <th>Etat</th>
                        <th>Année construction</th>
                        <th>Description</th>
                        <th>Images</th>
                        <th>Type de bien</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($properties as $property)
                        <tr>
                            <td>{{$property -> id}}</td>
                            <td>{{$property -> price.' €'}}</td>
                            <td>{{$property -> location}}</td>
                            <td>{{$property -> surface}}</td>
                            <td>{{$property -> roomNumber}}</td>
                            <td>{{$property -> condition}}</td>
                            <td>{{$property -> constructionYear}}</td>
                            <td>{{$property -> description}}</td>
        {{--                    <td><a href="{{route('posts.show',['id' => $property->id])}}">{{$property -> title}}</a></td>--}}
                            <td>
                            @foreach($property->images as $img)
                            {{$img -> img}}<br>
                            @endforeach
                            </td>
        {{--                    <td>{{$property -> created_date_formated}}</td>--}}
        {{--                    <td>{{$property -> category -> title ?? 'Pas de Catégorie'}}</td>--}}
                            <td>{{$property -> type -> title}}</td>
                            <td>{!!Form::open(['method'=>'DELETE','route'=>['properties.destroy',$property->id]])!!}
                                {{Form::submit('Supprimer', ['onclick' => 'return confirm ("Êtes-vous sur de vouloir supprimer ce bien ?");'])}}
                                {!!Form::close()!!}</td>
                            <td>
                                <a href="{{url('/properties/edit/'  . $property->id )}}"><button type="submit">Modifier</button></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <a href="{{url('properties/create')}}" class="grid text-5xl text-white bg-oxley-500 text-center justify-items-center">
        <button>Ajouter un bien</button>
    </a>

</x-app-layout>
