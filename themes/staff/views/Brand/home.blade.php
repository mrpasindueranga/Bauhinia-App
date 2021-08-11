@extends('layouts.panel')
@section('content')
    <div class="col-span-12">
        <div class="overflow-auto lg:overflow-visible ">
            <a class="bg-green-600 text-white text-sm float-right mr-2 py-1 px-2 rounded-md shadow-md hover:bg-green-700"
                href="{{ route('staff.brand.create') }}">Add
                Brand</a>
            <table class="table w-full text-gray-400 border-separate space-y-6 text-sm">
                <thead class=" text-gray-500" style="background-color:#202125;">
                    <tr>
                        <th class="p-3 text-left">Icon</th>
                        <th class="p-3 text-left">Brand</th>
                        <th class="p-3 text-left">Price</th>
                        <th class="p-3 text-left">Visibility</th>
                        <th class="p-3 text-left">Category</th>
                        <th class="p-3 text-left">Created By</th>
                        <th class="p-3 text-left">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($Brands as $Brand)
                        <tr style="background-color:#202125;">
                            <td class="p-3">
                                <img class="rounded-md shadow-md" style="width: 5em"
                                    src="{{ asset('storage\products\\' . $Brand->icon) }}" alt="">
                            </td>
                            <td class="p-3">
                                {{ $Brand->brand }}
                            </td>
                            <td class="p-3">
                                {{ $Brand->price }}
                            </td>
                            <td class="p-3">
                                @if ($Brand->visibility)
                                    <span class="bg-green-500 text-gray-50 rounded-md px-2 py-1">Visible</span>
                                @else
                                    <span class="bg-red-500 text-gray-50 rounded-md px-2 py-1">Hidden</span>
                                @endif
                            </td>
                            <td class="p-3">
                                <div style="background-color: {{ $Brand->tagColor }}; width: fit-content;"
                                    class="px-2 py-1 text-white rounded-md font-semibold shadow-md">
                                    {{ $Brand->category }}</div>
                            </td>
                            <td class="p-3 font-bold">
                                {{ $Brand->name }}
                            </td>
                            <td class="p-3 ">
                                <a href="#" class="text-gray-400 hover:text-gray-100 mr-2">
                                    <i class="material-icons-outlined text-base">visibility</i>
                                </a>
                                <a href="{{ route('staff.brand.edit', $Brand->id) }}"
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
                {{ $Brands->links() }}
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
