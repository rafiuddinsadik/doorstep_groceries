<?php

namespace App\Http\Controllers\Website;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show(){

        if(auth()->user()->isAdmin()){
            return view('admin.dashboard');
        }else if(auth()->user()->isCustomer()){
            $products = Product::all();
            $compact = compact('products');
            return view('website.landing.index', $compact);
        }
    }
}
