<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('WYSIWYG') }}
        </h2>
    </x-slot>

        <script type="text/javascript">
            tinymce.init({
                selector: '#mytextarea'
            });
        </script>
    <div class="container">
        <div class="row">
            <div class="col-12 m-5">
                <div class="card">
                    <h1>Modifier la page d'accueil à l'aide ce WYSIWYG</h1>
                    <div class=" m-5">
                        <div class="card">
                            <form method="post">
                                <textarea id="mytextarea">Hello, World!</textarea>
                            </form>
                        </div>
                    </div>

                </div>


            </div>
        </div>


    </div>




</x-app-layout>
