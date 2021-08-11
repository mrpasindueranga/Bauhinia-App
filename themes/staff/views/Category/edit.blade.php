@extends('layouts.panel')
@section('content')
    <div class="leading-loose">
        <form action="{{ route('staff.category.update', $Category->id) }}" method="POST"
            class="max-w-xl m-4 p-10 rounded shadow-xl" style="background-color:#202125;">
            @csrf
            @method('put')
            <p class="text-gray-100 text-lg mb-2 font-medium">Category information</p>
            <hr>
            <div class="mt-4">
                <label class="block text-sm text-white mb-2" for="cus_name">Category</label>
                <input class="w-full px-5 focus:ring-green-500 py-1 text-gray-700 bg-gray-200 rounded" name="category"
                    type="text" required placeholder="Category Name" value="{{ $Category->category }}">
            </div>
            <div class="mt-4">
                <label class="block text-sm text-white mb-2" for="cus_name">Tag Color</label>
                <input class="w-full px-1 focus:ring-green-500 py-1 h-20 text-gray-700 bg-gray-200 rounded" name="tagColor"
                    type="color" required value="{{ $Category->tagColor }}">
            </div>
            <div class="mt-4">
                <button class="px-4 py-1 text-white font-light tracking-wider bg-green-600 rounded"
                    type="submit">Save</button>
            </div>
        </form>
    </div>
@endsection
