@extends('layouts.app')
@section('content')
    <div style="height: 60%; width:100%;" class="slider bg-green-200">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img style="width: 100%; height:100%" src="{{ asset('storage\banners\Banner.png') }}" alt="">
                </div>
                <div class="swiper-slide">
                    <img style="width: 100%; height:100%" src="{{ asset('storage\banners\Banner_1.png') }}" alt="">
                </div>
                <div class="swiper-slide">
                    <img style="width: 100%; height:100%" src="{{ asset('storage\banners\Banner_2.png') }}" alt="">
                </div>
            </div>
            <!-- Add Arrows -->
            <div class="mr-10 swiper-button-next" style="color: white"></div>
            <div class="ml-10 swiper-button-prev" style="color: white"></div>
            <!-- Add Pagination -->
            <div class="swiper-pagination" style="color: white"></div>
        </div>
    </div>
    <h4 style="font-weight: 700;" class="p-4 pb-0">T Shirt</h4>
    <div style="width: 100%" class="p-4 flex flex-wrap">
        @foreach ($tshirts as $tshirt)
            <div class="py-6">
                <div class="flex max-w-md bg-white shadow-lg rounded-lg overflow-hidden">
                    <div class="w-1/3">
                        <img style="height: 224px; width: 149px" src="{{ asset('storage\products\\' . $tshirt->icon) }}"
                            alt="">
                    </div>
                    <div class="w-2/3 relative p-4">
                        <h1 class="text-gray-900 font-bold text-2xl">{{ substr($tshirt->description, 0, 20) . '...' }}
                        </h1>
                        <p class="mt-2 mb-2 text-gray-600 text-sm" style="height:8em">
                            {{ substr($tshirt->description, 0, 100) . '...' }}</p>
                        <div class="absolute bottom-5 w-full flex item-center justify-between mt-3">
                            <h1 class="text-gray-700 font-bold text-xl">{{ 'RS ' . $tshirt->price }}</h1>
                            @if (auth()->user())
                                <a href="order\create\{{ $tshirt->id }}"
                                    class="px-3 mr-6 py-2 bg-gray-800 text-white text-xs font-bold uppercase rounded">Add to
                                    Cart</a>
                            @else
                                <a href="#"
                                    class="px-3 mr-6 py-2 bg-gray-400 text-white text-xs font-bold uppercase rounded">Add to
                                    Cart</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
