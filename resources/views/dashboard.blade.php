<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

{{--    <div class="py-12">--}}
{{--        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">--}}
{{--            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">--}}
{{--                <table>--}}
{{--                    <thead>--}}
{{--                        <tr>--}}
{{--                            <th>Prix</th>--}}
{{--                            <th>Localisation</th>--}}
{{--                            <th>Nombre de pieces</th>--}}
{{--                            <th>Etat</th>--}}
{{--                            <th>Année de construction</th>--}}
{{--                            <th>Description</th>--}}
{{--                        </tr>--}}
{{--                    </thead>--}}
{{--                    <tbody>--}}
{{--                    @foreach($properties as $property)--}}
{{--                        <tr>--}}
{{--                            <td>{{$property -> price}}</td>--}}
{{--                            <td>{{$property -> location}}</td>--}}
{{--                            <td>{{$property -> roomNumber}}</td>--}}
{{--                            <td>{{$property -> condition}}</td>--}}
{{--                            <td>{{$property -> constructionYear}}</td>--}}
{{--                            <td>{{$property -> description}}</td>--}}
{{--                            <td></td>--}}
{{--                        </tr>--}}
{{--                    @endforeach--}}
{{--                    </tbody>--}}
{{--                    </tbody>--}}
{{--                </table>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
</x-app-layout>
