<?php

namespace App\Models;

use App\Models\Product;
use App\Models\RequestProduct;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RequestDetails extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function  request()
    {
        return $this->belongsTo(RequestProduct::class);
    }
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
    public function  user()
    {
        return $this->belongsTo(User::class);
    }
}
