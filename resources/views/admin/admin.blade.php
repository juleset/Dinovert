<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Vous êtes connecté en tant qu\'admin') }}
        </h2>
    </x-slot>

    <div class="container">
        <div class="grid grid-cols-1  text-center justify-items-center">
            <div class="">
                <a href="{{url('/admin/tabproperties')}}">
                    <button class="uppercase px-8 py-2 rounded-full bg-oxley-500 text-blue-50 max-w-max shadow-sm hover:shadow-lg">Gérer les biens</button>
                </a>
            </div>
            <div class="">
                <a href="{{url('/admin/tabarticles')}}">
                    <button class="uppercase px-8 py-2 rounded-full bg-oxley-500 text-blue-50 max-w-max shadow-sm hover:shadow-lg">Gérer les actualités</button>
                </a>

            </div>
            <div class="">
                <a href="{{url('/admin/wysiwyg')}}">
                    <button class="uppercase px-8 py-2 rounded-full bg-oxley-500 text-blue-50 max-w-max shadow-sm hover:shadow-lg">Acces au WYSIWYG</button>
                </a>

            </div>

        </div>
    </div>

</x-app-layout>
