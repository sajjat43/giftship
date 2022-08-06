<?php

namespace App\Models;

//  use App\Models\Product;
//use App\Models\Product;
//use App\Models\Product;
use App\Models\Brand;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(Category::class,'category_id','id');
    }
    public function subcategory()
    {
        return $this->belongsTo(subCategory::class,'subcategory_id','id');
    }
    public function brand()
    {
        return $this->belongsTo(Brand::class,'brand_id','id');
    }
}
