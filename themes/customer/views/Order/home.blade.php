@extends('layouts.app')
@section('content')
    <table class="table w-full border-separate space-y-6 text-sm">
        <thead class=" bg-gray-50 shadow-md rounded-md">
            <tr>
                <th class="p-3 text-left"></th>
                <th class="p-3 text-left">Brand</th>
                <th class="p-3 text-left">Quantity</th>
                <th class="p-3 text-left">Unit Price</th>
                <th class="p-3 text-left">Amount</th>
                <th class="p-3 text-left">Placed Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($Orders as $Order)
                <tr class="shadow-md rounded-md bg-gray-50 mx-5 y-2">
                    <td class="p-3">
                        <img class="rounded-md shadow-md" style="width: 5em"
                            src="{{ asset('storage\products\\' . $Order->icon) }}" alt="">
                    </td>
                    <td class="p-3">
                        <div style="font-size: 1.2em" class="font-black">{{ $Order->brand_name }}</div>
                    </td>
                    <td class="p-3">
                        <div class="text-green-500 font-black text-lg">{{ $Order->amount }}</div>
                    </td>
                    <td class="p-3">
                        <div class="text-gray-500 font-black text-lg">{{ $Order->quantity }}</div>
                    </td>
                    <td class="p-3">
                        <div class="text-red-500 font-black text-lg">{{ $Order->amount }}</div>
                    </td>
                    <td class="p-3 font-bold">
                        <div style="font-size: 1em" class="font-black">{{ $Order->created_at }}</div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="flex text-black">
        {{ $Orders->links() }}
    </div>
@endsection
