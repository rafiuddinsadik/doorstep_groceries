<?php

namespace App\Http\Controllers\Website;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WelcomeController extends Controller
{
    public function show(){

        $products = Product::all();
        $compact = compact('products');
        return view('website.landing.index', $compact);
    }
}
