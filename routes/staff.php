<?php

use App\Http\Controllers\Staff\BrandController;
use App\Http\Controllers\Staff\CategoryController;
use App\Http\Controllers\Staff\DashboardController;
use App\Http\Controllers\Staff\EmployeeController;
use App\Http\Controllers\Staff\InventoryController;
use App\Http\Controllers\Staff\MeasurementController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Barryvdh\DomPDF\Facade as PDF;

Route::prefix('staff')->middleware(['theme:staff', 'auth:staff'])->name('staff.')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('home');
    Route::resource('/brand', BrandController::class);
    Route::resource('/category', CategoryController::class);
    Route::resource('/employee', EmployeeController::class);
    Route::resource('/inventory', InventoryController::class);
    Route::resource('/measurement', MeasurementController::class);

    Route::get('/order_report', function () {
        $date =  date("Y-m-d", time());
        $orders = DB::table('orders')
            ->join('brands', 'brands.id', '=', 'orders.brand')
            ->join('inventories', 'brands.id', '=', 'inventories.brand')
            ->select('orders.*', 'brands.brand as brand_name', 'brands.icon', 'brands.price', 'inventories.color', 'inventories.size')
            ->where('orders.date', '=', $date)
            ->distinct()->get();
        return view('Report.home', ['Orders' => $orders]);
    })->name('order_report.home');

    Route::get('/order_report/print', function () {
        $date =  date("Y-m-d", time());
        $Orders = DB::table('orders')
            ->join('brands', 'brands.id', '=', 'orders.brand')
            ->join('inventories', 'brands.id', '=', 'inventories.brand')
            ->select('orders.*', 'brands.brand as brand_name', 'brands.icon', 'brands.price', 'inventories.color', 'inventories.size')
            ->where('orders.date', '=', $date)
            ->distinct()->get();
        $pdf = PDF::loadView('Report.report', compact('Orders'));
        return $pdf->download('statement.pdf');
    })->name('order_report.print');
});
