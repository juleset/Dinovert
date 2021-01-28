<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Vous êtes connecté en tant qu\'admin') }}
        </h2>
    </x-slot>

    <div class="container">
        <div class="grid-cols-3 flex md:space-x-10 lg:space-x-20 text-center justify-items-center">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                <a href="{{route('/admin.tabproperties')}}">Gérer les biens</a>
            </div>
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                <a href="">Gérer les actualités</a>
            </div>

        </div>
    </div>

</x-app-layout>
