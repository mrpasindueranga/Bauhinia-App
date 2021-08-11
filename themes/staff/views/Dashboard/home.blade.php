@extends('layouts.panel')
@section('content')
    @role('admin')
    <div class="text-gray-500 mb-5" style="font-weight: 700">
        <h3 class="mb-2">Dashboard</h3>
        <hr>
    </div>

    <div class="flex w-full h-1/4 space-x-10">
        <div class="w-1/4 h-3/4 p-4 bg-yellow-600 text-white rounded-lg shadow-lg">
            <h1 class="text-2xl">Today Orders</h1>
            <hr>
            <div class="flex w-full h-full justify-between items-center">
                <span class="text-2xl">Unit</span>
                <span class="text-2xl">{{ $OrderCount }}</span>
            </div>
        </div>

        <div class="w-1/4 h-3/4 p-4 bg-blue-600 text-white rounded-lg shadow-lg">
            <h1 class="text-2xl">Total Customers</h1>
            <hr>
            <div class="flex w-full h-full justify-between items-center">
                <span class="text-2xl">Unit</span>
                <span class="text-2xl">{{ $UserCount }}</span>
            </div>
        </div>
        <div class="w-1/4 h-3/4 p-4 bg-green-600 text-white rounded-lg shadow-lg">
            <h1 class="text-2xl">Total Employees</h1>
            <hr>
            <div class="flex w-full h-full justify-between items-center">
                <span class="text-2xl">Unit</span>
                <span class="text-2xl">{{ $StaffCount }}</span>
            </div>
        </div>
    </div>

    <div class="flex w-full h-1/4 space-x-10">
        <div class="w-1/4 h-3/4 p-4 bg-yellow-600 text-white rounded-lg shadow-lg">
            <h1 class="text-2xl">Total Category</h1>
            <hr>
            <div class="flex w-full h-full justify-between items-center">
                <span class="text-2xl">Unit</span>
                <span class="text-2xl">{{ $CategoryCount }}</span>
            </div>
        </div>

        <div class="w-1/4 h-3/4 p-4 bg-blue-600 text-white rounded-lg shadow-lg">
            <h1 class="text-2xl">Total Brand</h1>
            <hr>
            <div class="flex w-full h-full justify-between items-center">
                <span class="text-2xl">Unit</span>
                <span class="text-2xl">{{ $BrandCount }}</span>
            </div>
        </div>
    </div>

    @endrole

@endsection
