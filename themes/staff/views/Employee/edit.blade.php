@extends('layouts.panel')
@section('content')
    <div class="leading-loose">
        <form action="{{ route('staff.employee.store') }}" method="POST" class="max-w-xl m-4 p-10 rounded shadow-xl"
            style="background-color:#202125;">
            @csrf
            <p class="text-gray-100 text-lg mb-2 font-medium">Transfer information</p>
            <hr>
            <div class="mt-2">
                <label class="block text-sm text-white mb-2">Employee Name</label>
                <input class="w-full px-5 focus:ring-green-500 py-1 text-gray-700 bg-gray-200 rounded" name="name"
                    type="text" required placeholder="Employee Name" value="{{ $Staff->name }}">
            </div>
            <div class="mt-2">
                <label class="block text-sm text-white mb-2">Employee NIC</label>
                <input class="w-full px-5 focus:ring-green-500 py-1 text-gray-700 bg-gray-200 rounded" name="nic"
                    type="text" required placeholder="Employee NIC" value="{{ $Staff->nic }}">
            </div>
            <div class="mt-2">
                <label class="block text-sm text-white mb-2">Employee Contact</label>
                <input class="w-full px-5 focus:ring-green-500 py-1 text-gray-700 bg-gray-200 rounded" name="contact"
                    type="number" required placeholder="Employee Contact Number" value="{{ $Staff->contact }}">
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
