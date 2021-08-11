<div class="flex mt-2 mb-5 items-center space-x-2">
    <button wire:click.prevent="dec"
        class="bg-gray-300 font-black text-gray-500 rounded-md shadow-md py-1 px-2">-</button>
    <input style="width: 5em" class="border-none text-center focus:ring-0" name="quantity" wire:model="quantity"
        readonly type="text" value="{{ $quantity }}">
    <button wire:click.prevent="inc"
        class="bg-gray-300 font-black text-gray-500 rounded-md shadow-md py-1 px-2">+</button>
</div>
<label class="text-md font-black bg-white" for="">Description</label>
<div class="mt-2 text-gray-600" style="text-align: justify; text-justify: inter-word;">
    {{ $description }}</div>
<div class="flex w-full justify-between mt-5" x-data="{open : false}">
    <div class="flex items-center font-extrabold text-red-500 text-2xl space-x-3">
        <div>Amount</div>
        <input class="text-gray-500 text-2xl  focus:ring-0 font-extrabold border-none" readonly
            wire:model="total_amount" type="text" name="amount" value="{{ $total_amount }}">
    </div>
    <button @click.prevent="open = true" class="px-2 py-1 text-white bg-black rounded-md shadow-lg">Place Order</button>
    <div x-show="open" @click.away="open = false" style="opacity: 95%"
        class="absolute flex inset-0 bg-black justify-center items-center">
        <div class=" bg-white rounded-md shadow-md p-4 w-1/2 h-3/4">
            <div style="font-size: 2em" class="flex font-black justify-center">
                Confirm Order Details
            </div>
            <div class="mt-2">
                <label class="block text-sm text-black font-black mb-2">Name</label>
                <input class="w-full px-5 focus:ring-green-500 py-1 text-gray-700 bg-gray-200 rounded" name="name"
                    type="text" required placeholder="Name" value="{{ $user->name }}">
            </div>
            <div class="mt-2">
                <label class="block text-sm text-black font-black mb-2">Email</label>
                <input class="w-full px-5 focus:ring-green-500 py-1 text-gray-700 bg-gray-200 rounded" name="email"
                    type="email" required placeholder="Email" value="{{ $user->email }}">
            </div>
            <div class="mt-2">
                <label class="block text-sm text-black font-black mb-2">Contact Number 1</label>
                <input class="w-full px-5 focus:ring-green-500 py-1 text-gray-700 bg-gray-200 rounded" name="contact_1"
                    type="number" required placeholder="Contact Number 2" value="{{ $user->contact_1 }}">
            </div>
            <div class="mt-2">
                <label class="block text-sm text-black font-black mb-2">Contact Number 2</label>
                <input class="w-full px-5 focus:ring-green-500 py-1 text-gray-700 bg-gray-200 rounded" name="contact_2"
                    type="number" required placeholder="Contact Number 2" value="{{ $user->contact_2 }}">
            </div>
            <div class="mt-2">
                <label class="block text-sm text-black font-black mb-2">Delivery Address</label>
                <textarea rows="5" class="w-full px-5 focus:ring-green-500 py-1 text-gray-700 bg-gray-200 rounded"
                    name="address" type="number" required
                    placeholder="Delivery Address">{{ $user->address }}</textarea>
            </div>
            <div class="flex mt-2 justify-end space-x-3">
                <button type="submit" class="px-2 py-1 text-white bg-black rounded-md shadow-lg">Confirm
                    Order</button>
                <button @click.prevent="open = false"
                    class="px-2 py-1 text-white bg-red-500 rounded-md shadow-lg">Cancel
                    Order</button>
            </div>
        </div>
    </div>
</div>
