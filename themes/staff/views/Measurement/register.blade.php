@extends('layouts.panel')
@section('content')
    <div class="leading-loose">
        <form action="{{ route('staff.measurement.store') }}" method="POST" class="max-w-xl m-4 p-10 rounded shadow-xl"
            style="background-color:#202125;">
            @csrf
            <p class="text-gray-100 text-lg mb-2 font-medium">Measurement information</p>
            <hr>
            <div class="mt-4">
                <label class="block text-sm text-white mb-2" for="cus_name">Unit</label>
                <input class="w-full px-5 focus:ring-green-500 py-1 text-gray-700 bg-gray-200 rounded" name="unit"
                    type="text" required placeholder="Category Name">
            </div>
            <div class="mt-4">
                <label class="block text-sm text-white mb-2" for="cus_name">Symbol</label>
                <input class="w-full px-5 focus:ring-green-500 py-1 text-gray-700 bg-gray-200 rounded" name="symbol"
                    type="text" required placeholder="Measurement Symbol">
            </div>
            <div class="mt-4">
                <button class="px-4 py-1 text-white font-light tracking-wider bg-green-600 rounded"
                    type="submit">Save</button>
            </div>
        </form>
    </div>
@endsection
