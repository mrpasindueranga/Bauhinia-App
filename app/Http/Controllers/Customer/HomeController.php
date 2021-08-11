<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $tshirt = Brand::paginate(10);
        return view('Home.home', ['tshirts' => $tshirt]);
    }
}
