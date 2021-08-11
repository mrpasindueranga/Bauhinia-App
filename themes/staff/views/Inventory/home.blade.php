@extends('layouts.panel')
@section('content')
    <div class="col-span-12">
        <div class="overflow-auto lg:overflow-visible ">
            <a class="bg-green-600 text-white text-sm float-right mr-2 py-1 px-2 rounded-md shadow-md hover:bg-green-700"
                href="{{ route('staff.inventory.create') }}">Make Transfer</a>
            <table class="table w-full text-gray-400 border-separate space-y-6 text-sm">
                <thead class=" text-gray-500" style="background-color:#202125;">
                    <tr>
                        <th class="p-3 text-left">Brand</th>
                        <th class="p-3 text-left">Color</th>
                        <th class="p-3 text-left">Size</th>
                        <th class="p-3 text-left">Type</th>
                        <th class="p-3 text-left">Quantity</th>
                        <th class="p-3 text-left">Price</th>
                        <th class="p-3 text-left">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($Inventories as $Inventory)
                        <tr style="background-color:#202125;">
                            <td class="p-3">
                                {{ $Inventory->brand_name }}
                            </td>
                            <td class="p-3">
                                <div style="width: 2em; height: 2em; background-color: {{ $Inventory->color }}"
                                    class="rounded-md shadow-md"></div>
                            </td>
                            <td class="p-3">
                                {{ $Inventory->symbol }}
                            </td>
                            <td class="p-3">
                                {{ $Inventory->type }}
                            </td>
                            <td class="p-3">
                                {{ $Inventory->quantity }}
                            </td>
                            <td class="p-3 font-bold">
                                {{ $Inventory->price }}
                            </td>
                            <td class="p-3 ">
                                <a href="#" class="text-gray-400 hover:text-gray-100 mr-2">
                                    <i class="material-icons-outlined text-base">visibility</i>
                                </a>
                                <a href="{{ route('staff.inventory.edit', $Inventory->id) }}"
                                    class="text-gray-400 hover:text-gray-100  mx-2">
                                    <i class="material-icons-outlined text-base">edit</i>
                                </a>
                                <a href="#" class="text-gray-400 hover:text-gray-100  ml-2">
                                    <i class="material-icons-round text-base">delete_outline</i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="flex text-white">
                {{ $Inventories->links() }}
            </div>
        </div>
    </div>
    </div>
    <style>
        .table {
            border-spacing: 0 15px;
        }

        i {
            font-size: 1rem !important;
        }

        .table tr {
            border-radius: 20px;
        }

        tr td:nth-child(n+7),
        tr th:nth-child(n+7) {
            border-radius: 0 .625rem .625rem 0;
        }

        tr td:nth-child(1),
        tr th:nth-child(1) {
            border-radius: .625rem 0 0 .625rem;
        }

    </style>
@endsection
