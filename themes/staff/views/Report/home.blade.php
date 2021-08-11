@extends('layouts.panel')
@section('content')
    <div style="overflow-y: auto" class="w-full h-5/6 bg-white rounded-md flex flex-col justify-start items-center">
        <table class="w-full">
            <div class="py-5 text-lg font-black">Order Report</div>
            <thead>
                <tr>
                    <th>Brand Name</th>
                    <th>Color</th>
                    <th>Size</th>
                    <th>Date</th>
                    <th>Placed By</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($Orders as $Order)
                    <tr>
                        <td class="text-center">{{ $Order->brand_name }}</td>
                        <td class="text-center">{{ $Order->color }}</td>
                        <td class="text-center">{{ $Order->size }}</td>
                        <td class="text-center">{{ $Order->date }}</td>
                        <td class="text-center">{{ $Order->name }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="flex justify-end">
        <a class="text-white mt-5 bg-green-500 rounded-md shadow-md py-1 px-2"
            href="{{ route('staff.order_report.print') }}">Print</a>
    </div>
@endsection
