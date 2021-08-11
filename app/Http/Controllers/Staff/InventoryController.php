<?php

namespace App\Http\Controllers\Staff;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Inventory;
use App\Models\Measurement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inventories = DB::table('inventories')
            ->join('brands', 'brands.id', '=', 'inventories.brand')
            ->join('measurements', 'measurements.id', '=', 'inventories.size')
            ->select('inventories.*', 'brands.brand as brand_name', 'measurements.symbol')
            ->paginate(10);
        return view('Inventory.home', ['Inventories' => $inventories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brands = Brand::all();
        $measurements = Measurement::all();
        return view('Inventory.register', ['Brands' => $brands, 'Measurements' => $measurements]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Inventory::create([
            'color' => $request->color,
            'size' => $request->size,
            'quantity' => $request->quantity,
            'price' => $request->price,
            'note' => trim($request->note),
            'date' => $request->date,
            'brand' => $request->brand,
            'type' => $request->type,
            'category' => $request->category,
            'createdBy' => auth()->user()->id
        ]);

        return redirect()->route('staff.inventory.index');
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
        $inventory = Inventory::find($id);
        $brands = Brand::all();
        $measurements = Measurement::all();
        return view('Inventory.edit', ['Inventory' => $inventory, 'Brands' => $brands, 'Measurements' => $measurements]);
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
        $inventory = Inventory::find($id);

        $inventory->color = $request->color;
        $inventory->size = $request->size;
        $inventory->quantity = $request->quantity;
        $inventory->price = $request->price;
        $inventory->note = trim($request->note);
        $inventory->date = $request->date;
        $inventory->brand = $request->brand;
        $inventory->type = $request->type;
        $inventory->createdBy = auth()->user()->id;

        $inventory->save();

        return redirect()->route('staff.inventory.index');
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
