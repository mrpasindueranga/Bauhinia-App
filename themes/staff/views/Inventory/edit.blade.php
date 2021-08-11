@extends('layouts.panel')
@section('content')
    <div class="leading-loose">
        <form action="{{ route('staff.inventory.update', $Inventory->id) }}" method="POST"
            class="max-w-xl m-4 p-10 rounded shadow-xl" style="background-color:#202125;">
            @csrf
            @method('put')
            <p class="text-gray-100 text-lg mb-2 font-medium">Transfer information</p>
            <hr>
            <div class="mt-2">
                <label class="block text-sm text-white mb-2">Brand</label>
                <select required class="w-full px-5 focus:ring-green-500 py-1 text-gray-700 bg-gray-200 rounded"
                    name="brand">
                    <option value="">-- SELECT BRAND --</option>
                    @foreach ($Brands as $Brand)
                        @if ($Brand->id === $Inventory->brand)
                            <option value="{{ $Brand->id }}" selected>{{ $Brand->brand }}</option>
                        @else
                            <option value="{{ $Brand->id }}">{{ $Brand->brand }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="mt-2">
                <label class="block text-sm text-white mb-2" for="cus_name">Size</label>
                <select required class="w-full px-5 focus:ring-green-500 py-1 text-gray-700 bg-gray-200 rounded"
                    name="size">
                    <option value="">-- SELECT SIZE --</option>
                    @foreach ($Measurements as $Measurement)
                        @if ($Measurement->id === $Inventory->size)
                            <option value="{{ $Measurement->id }}" selected>{{ $Measurement->symbol }}</option>
                        @else
                            <option value="{{ $Measurement->id }}">{{ $Measurement->symbol }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="mt-2 w-full flex justify-between">
                <div style="width: 45%;">
                    <label class="block text-sm text-white mb-2">Total Price</label>
                    <input class="w-full px-5 focus:ring-green-500 py-1 text-gray-700 bg-gray-200 rounded" name="price"
                        type="number" required placeholder="Total Price" value="{{ $Inventory->price }}">
                </div>
                <div style="width: 45%;">
                    <label class="block text-sm text-white mb-2">Quantity</label>
                    <input class="w-full px-5 focus:ring-green-500 py-1 text-gray-700 bg-gray-200 rounded" name="quantity"
                        type="number" required placeholder="Quantity" value="{{ $Inventory->quantity }}">
                </div>
            </div>
            <div class="mt-2 w-full flex justify-between">
                <div style="width: 45%;">
                    <label class="block text-sm text-white mb-2" for="cus_name">Transfer Date</label>
                    <input class="w-full px-5 focus:ring-green-500 py-1 text-gray-700 bg-gray-200 rounded" name="date"
                        type="date" required value="{{ $Inventory->date }}">
                </div>
                <div style="width: 45%;">
                    <label class="block text-sm text-white mb-2" for="cus_name">Transfer Type</label>
                    <select required class="w-full px-5 focus:ring-green-500 py-1 text-gray-700 bg-gray-200 rounded"
                        name="type">
                        <option value="">-- SELECT TYPE --</option>
                        @if ($Inventory->type === 'sales')
                            <option value="sales" selected>Sales</option>
                            <option value="purchase">Purchase</option>
                        @else
                            <option value="sales">Sales</option>
                            <option value="purchase" selected>Purchase</option>
                        @endif
                    </select>
                </div>
            </div>
            <div class="mt-4">
                <label class="block text-sm text-white mb-2" for="cus_name">Color</label>
                <input class="w-full px-1 focus:ring-green-500 py-1 h-20 text-gray-700 bg-gray-200 rounded" name="color"
                    type="color" required value="{{ $Inventory->color }}">
            </div>
            <div class="mt-2">
                <label class="block text-sm text-white mb-2">Note</label>
                <textarea rows="4" required
                    class="w-full px-5 description focus:ring-green-500 py-1 text-gray-700 bg-gray-200 rounded"
                    name="note">{{ $Inventory->note }}</textarea>
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
