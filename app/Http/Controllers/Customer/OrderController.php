<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Inventory;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = DB::table('orders')
            ->join('brands', 'brands.id', '=', 'orders.brand')
            ->select('orders.*', 'brands.brand as brand_name', 'brands.icon', 'brands.price')
            ->paginate(10);

        return view('Order.home', ['Orders' => $orders]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $brand = Brand::find($id);
        $inventory = Inventory::where('brand', '=', $id)->first();
        $user = auth()->user();
        return view('Order.register', ['Brand' => $brand, 'User' => $user, 'Inventory' => $inventory]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Order::create([
            'amount' => $request->amount,
            'quantity' => $request->quantity,
            'placedBy' => auth()->user()->id,
            'brand' => $request->id,
            'date' => date("Y-m-d", time()),
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
            'contact_1' => $request->contact_1,
            'contact_2' => $request->contact_2
        ]);

        $brand = Brand::find($request->id);

        Inventory::create([
            'color' => $request->color,
            'size' => $request->size,
            'quantity' => $request->quantity,
            'price' => $request->amount,
            'note' => trim($request->note),
            'date' => date("Y-m-d", time()),
            'brand' => $request->id,
            'type' => 'sales',
            'category' => $request->category,
            'createdBy' => auth()->user()->id
        ]);

        return redirect()->route('customer.home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
