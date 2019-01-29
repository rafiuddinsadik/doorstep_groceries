<?php

namespace App\Http\Controllers\Website;

use App\Brand;
use App\Category;
use App\Models\Product;
use App\Sub_Category;
use App\WeightType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }



    //admin panel
    public function showList()
    {
        $products= Product::all();
        $brands = Brand::all();
        $categories = Category::all();
        $sub_categories = Sub_Category::all();
        $weight_types = WeightType::all();
        $compact = compact('products', 'brands', 'categories', 'sub_categories', 'weight_types');
        return view('admin.table.products', $compact);
    }

    public function detailsForAdmin($id){
        $product = Product::findOrFail($id);
        $compact = compact('product');
        return view('admin.product.product-details', $compact);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pathForImage = $request->file('image')->store('product-images');
        Product::create([
            'name' => $request->name,
            'brand_id' => $request->brand_id,
            'category_id' => $request->category_id,
            'sub_category_id' => $request->sub_category_id,
            'total_quantity' => $request->quantity,
            'price' => $request->price,
            'discounted_price' => $request->discounted_price,
            'weight_id' => $request->weight_id,
            'weight' => $request->weight,
            'description' => $request->description,
            'picture' => $pathForImage,
            'user_id' => 1,
            'slug' => str_slug("$request->name", '-'),

        ]);

        return redirect()->back();
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
