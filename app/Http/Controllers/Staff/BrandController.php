<?php

namespace App\Http\Controllers\Staff;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Measurement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

use function PHPUnit\Framework\fileExists;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = DB::table('brands')
            ->join('staff', 'staff.id', '=', 'brands.createdBy')
            ->join('categories', 'categories.id', '=', 'brands.category')
            ->select('brands.*', 'staff.name', 'categories.tagColor', 'categories.category')
            ->paginate(5);
        return view('Brand.home', ['Brands' => $brands]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $measurements = Measurement::all();
        return view('Brand.register', ['Categories' => $categories, 'Measurements' => $measurements]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if ($request->file()) {
            $fileName = time() . '_' . trim($request->brand) . '.jpg';
            $request->file('icon')->storeAs('products', $fileName, 'public');
        }

        Brand::create([
            'icon' => $fileName,
            'brand' => trim($request->brand),
            'price' => trim($request->price),
            'description' => trim($request->description),
            'measurement' => trim($request->size),
            'visibility' => $request->visibility,
            'category' => $request->category,
            'createdBy' => auth()->user()->id
        ]);

        return redirect()->route('staff.brand.index');
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
        $brand = Brand::find($id);
        $categories = Category::all();
        $measurements = Measurement::all();

        return view('Brand.edit', ['Brand' => $brand, 'Categories' => $categories, 'Measurements' => $measurements]);
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
        $item = Brand::find($id);

        if ($request->file()) {

            if (fileExists(asset('storage\products' . $item->icon))) {
                Storage::delete(asset('storage\products' . $item->icon));
            }

            $fileName = time() . '_' . trim($request->brand) . '.jpg';
            $request->file('icon')->storeAs('products', $fileName, 'public');

            $item->icon = $fileName;
        }


        $item->brand = trim($request->brand);
        $item->price = trim($request->price);
        $item->description = trim($request->description);
        $item->visibility = trim($request->visibility);
        $item->category = $request->category;
        $item->createdBy = auth()->user()->id;
        $item->measurement = $request->size;

        $item->save();

        return redirect()->route('staff.brand.index');
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
