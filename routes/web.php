<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


use App\Sub_Category;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Input;

Auth::routes();

Route::get('/', 'Website\WelcomeController@show')->name('website.landing.index');
Route::get('/home', 'Website\HomeController@show')->name('website.home');


//Cart
Route::get('/cart', 'CartController@index')->name('cart.index');
Route::post('/cart', 'CartController@store')->name('cart.store');
Route::get('empty', function (){
    Cart::destroy();
});

//admin panel

Route::group([
    'prefix' => 'admin',
    'middleware' => 'admin'
], function () {
    Route::get('/dashboard', 'AdminController@show')->name('admin.dashboard');
    Route::get('/products', 'Website\ProductController@showList')->name('admin.dashboard.products');
    Route::post('/products', 'Website\ProductController@store')->name('admin.dashboard.store');
    Route::get('/products/details/{id}', 'Website\ProductController@detailsForAdmin')->name('admin.dashboard.products.details');
    Route::get('/products/edit/{id}', 'Website\ProductController@editForAdmin')->name('admin.dashboard.products.edit');
    Route::post('/products/update/{id}', 'Website\ProductController@update')->name('admin.dashboard.products.update');
    Route::post('/products/delete/{id}', 'Website\ProductController@destroy')->name('admin.dashboard.products.delete');
});

Route::get('/ajax-subcat', function (){
    $cat_id = Input::get('cat_id');
    $sub_categories = Sub_Category::where('category_id', '=', $cat_id)->get();
    return response()->json($sub_categories);
});
//Route::resource('brands', 'BrandController');

