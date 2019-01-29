<?php

namespace App\Models;

use App\Brand;
use App\Category;
use App\Sub_Category;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $guarded = [];

    public function getBrand(){
        return $this->belongsTo(Brand::class,'brand_id', 'id');
    }

    public function getCategory(){
        return $this->belongsTo(Category::class,'category_id', 'id');
    }

    public function getSubCategory(){
        return $this->belongsTo(Sub_Category::class,'sub_category_id', 'id');
    }

}
