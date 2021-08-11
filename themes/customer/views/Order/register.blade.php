@extends('layouts.app')
@section('content')
    <div class="flex text-lgflex w-full h-full">
        <div class="w-1/2 p-10">
            <img style="height: 100%; width: 100%" src="{{ asset('storage\products\\' . $Brand->icon) }}" alt="">
        </div>
        <form action="{{ route('customer.order.store') }}" method="POST" class="w-1/2 py-10 pr-10">
            @csrf
            <div class="mb-5">
                <div class="text-2xl text-gray-600 font-black">{{ $Brand->brand }}</div>
                <span class="flex items-center space-x-2">
                    <div>Reference Number</div>
                    <input class="text-gray-500  focus:ring-0 font-extrabold border-none" readonly type="text" name="id"
                        value="{{ $Brand->id }}">
                </span>
            </div>
            <div class="text-sm font-semibold" style="text-transform: uppercase">in stock</div>
            <div class="text-red-500 mb-5" style="font-weight: 900; font-size:2em">RS {{ $Brand->price }}</div>
            <label class="text-md font-black" for="">Size</label>
            <div class="flex mt-2 mb-5 space-x-2">
                <input type="hidden" name="size" value="{{ $Inventory->size }}">
                <input type="hidden" name="color" value="{{ $Inventory->color }}">
                <div class="bg-gray-300 text-gray-500 rounded-md shadow-md py-1 px-2">S</div>
            </div>
            @livewire('order-quantity', ['description' => $Brand->description, 'unit_price' => $Brand->price, 'user' =>
            $User])
        </form>
    </div>
@endsection
