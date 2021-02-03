<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tous nos biens') }}
        </h2>
    </x-slot>

<div class="grid justify-items-center mt-5">
    <div class=" grid grid-cols-1 bg-oxley-400 bg-opacity-75 rounded-lg ">

            <div class="m-5 bg-white text-center rounded-lg">
                <div class=" bg-gray-100">
                    <div class="swiper-container ">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            <div class="swiper-slide">
                                <img src="{{$properties->images[0]->img}}">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{$properties->images[1]->img}}">
                            </div>
                            <div class="swiper-slide">
                                <img src="{{$properties->images[2]->img}}">
                            </div>
                        </div>
                        <!-- If we need navigation buttons -->
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>

                    </div>
                </div>

                <p>{{$properties->price.' €'}}</p>
                <p>{{$properties->location}}</p>
                <p>{{$properties->surface.' m²'}}</p>
                <p>{{$properties->roomNumber}}</p>
                <p>{{$properties->condition}}</p>
                <p>{{$properties->constructionYear}}</p>
                <p>{{$properties->description}}</p>
            </div>

    </div>






    <script>
        var mySwiper = new Swiper ('.swiper-container', {
            // Optional parameters
            direction: 'horizontal',
            loop: true,



            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },

        })
    </script>





</div>
</x-app-layout>
