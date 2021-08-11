@extends('layouts.panel')
@section('content')
    <div class="col-span-12">
        <div class="overflow-auto lg:overflow-visible ">
            <a class="bg-green-600 text-white text-sm float-right mr-2 py-1 px-2 rounded-md shadow-md hover:bg-green-700"
                href="{{ route('staff.employee.create') }}">Add Employee</a>
            <table class="table w-full text-gray-400 border-separate space-y-6 text-sm">
                <thead class=" text-gray-500" style="background-color:#202125;">
                    <tr>
                        <th class="p-3 text-left">Name</th>
                        <th class="p-3 text-left">Email</th>
                        <th class="p-3 text-left">NIC</th>
                        <th class="p-3 text-left">Contact</th>
                        <th class="p-3 text-left">Created At</th>
                        <th class="p-3 text-left">Update At</th>
                        <th class="p-3 text-left">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($Employees as $Employee)
                        <tr style="background-color:#202125;">
                            <td class="p-3">
                                {{ $Employee->name }}
                            </td>
                            <td class="p-3">
                                {{ $Employee->email }}
                            </td>
                            <td class="p-3">
                                {{ $Employee->nic }}
                            </td>
                            <td class="p-3">
                                {{ $Employee->contact }}
                            </td>
                            <td class="p-3">
                                {{ $Employee->created_at }}
                            </td>
                            <td class="p-3">
                                {{ $Employee->updated_at }}
                            </td>
                            <td class="p-3 ">
                                <a href="#" class="text-gray-400 hover:text-gray-100 mr-2">
                                    <i class="material-icons-outlined text-base">visibility</i>
                                </a>
                                <a href="{{ route('staff.employee.edit', $Employee->id) }}"
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
                {{ $Employees->links() }}
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
