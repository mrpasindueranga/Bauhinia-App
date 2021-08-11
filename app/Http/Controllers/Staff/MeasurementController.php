<?php

namespace App\Http\Controllers\Staff;

use App\Http\Controllers\Controller;
use App\Models\Measurement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MeasurementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $measurements =  DB::table('measurements')
            ->join('staff', 'staff.id', '=', 'measurements.createdBy')
            ->select('measurements.*', 'staff.name')
            ->paginate(10);
        return view('Measurement.home', ['Measurements' => $measurements]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Measurement.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Measurement::create([
            'unit' => $request->unit,
            'symbol' => $request->symbol,
            'createdBy' => auth()->user()->id
        ]);

        return redirect()->route('staff.measurement.index');
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
        $measurement = Measurement::find($id);
        return view('Measurement.edit', ['Measurement' => $measurement]);
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
        $measurement = Measurement::find($id);
        $measurement->unit = $request->unit;
        $measurement->symbol = $request->symbol;
        $measurement->createdBy = auth()->user()->id;
        $measurement->save();

        return redirect()->route('staff.measurement.index');
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
