@extends('layouts.panel')
@section('content')
    <div class="leading-loose">
        <form action="{{ route('staff.brand.store') }}" method="POST" class="max-w-xl m-4 p-10 rounded shadow-xl"
            enctype="multipart/form-data" style="background-color:#202125;">
            @csrf
            <p class="text-gray-100 text-lg mb-2 font-medium">Product information</p>
            <hr>
            <div class="flex items-center py-6">
                <div class="w-12 h-12 mr-4 flex-none rounded-xl border overflow-hidden">
                    <img class="w-12 h-12 mr-4 object-cover" src="#" alt="Avatar Upload">
                </div>
                <label class="cursor-pointer ">
                    <span
                        class="focus:outline-none text-white text-sm py-2 px-4 rounded-full bg-green-400 hover:bg-green-500 hover:shadow-lg">Browse</span>
                    <input name="icon" type="file" class="hidden" :multiple="multiple" :accept="accept">
                </label>
            </div>
            <div>
                <label class="block text-sm text-white mb-2">Brand</label>
                <input class="w-full px-5 focus:ring-green-500 py-1 text-gray-700 bg-gray-200 rounded" name="brand"
                    type="text" required placeholder="Brand Name">
            </div>
            <div class="mt-2">
                <label class="block text-sm text-white mb-2" for="cus_name">Size</label>
                <select required class="w-full px-5 focus:ring-green-500 py-1 text-gray-700 bg-gray-200 rounded"
                    name="size">
                    <option value="">-- SELECT SIZE --</option>
                    @foreach ($Measurements as $Measurement)
                        <option value="{{ $Measurement->id }}">{{ $Measurement->symbol }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mt-2 w-full flex justify-between">
                <div style="width: 45%;">
                    <label class="block text-sm text-white mb-2">Price</label>
                    <input class="w-full px-5 focus:ring-green-500 py-1 text-gray-700 bg-gray-200 rounded" name="price"
                        type="number" required placeholder="Brand Price">
                </div>
                <div style="width: 45%;">
                    <label class="block text-sm text-white mb-2" for="cus_name">Visibility</label>
                    <select class="w-full px-5 focus:ring-green-500 py-1 text-gray-700 bg-gray-200 rounded"
                        name="visibility" required>
                        <option value="1">Visible</option>
                        <option value="0">Hidden</option>
                    </select>
                </div>
            </div>
            <div class="mt-2">
                <label class="block text-sm text-white mb-2" for="cus_name">Category</label>
                <select required class="w-full px-5 focus:ring-green-500 py-1 text-gray-700 bg-gray-200 rounded"
                    name="category">
                    <option value="">-- SELECT CATEGORY --</option>
                    @foreach ($Categories as $Category)
                        <option value="{{ $Category->id }}">{{ $Category->category }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mt-2">
                <label class="block text-sm text-white mb-2">Description</label>
                <textarea rows="5" required
                    class="w-full px-5 description focus:ring-green-500 py-1 text-gray-700 bg-gray-200 rounded"
                    name="description" placeholder="Type Product Description"></textarea>
            </div>
            <div class="mt-4">
                <button class="px-4 py-1 text-white font-light tracking-wider bg-green-600 rounded"
                    type="submit">Save</button>
            </div>
        </form>
    </div>
    <style>
        .description::placeholder {
            margin: 0;
            padding: 0;
        }

    </style>
@endsection
