<?php

namespace App\Http\Controllers\Staff;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Order;
use App\Models\Staff;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $BrandCount = Brand::count();
        $StaffCount = Staff::count();
        $UserCount = User::count();
        $OrderCount = Order::count();
        $CategoryCount = Category::count();
        return view('Dashboard.home', ['BrandCount' => $BrandCount, 'StaffCount' => $StaffCount, 'UserCount' => $UserCount, 'OrderCount' => $OrderCount, 'CategoryCount' => $CategoryCount]);
    }
}
