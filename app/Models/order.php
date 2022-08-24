<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function  user()
    {
        return $this->belongsTo(User::class);
    }
    public function  RequestDetails()
    {
        return $this->hasMany(RequestDetails::class);
    }
    public function product()
    {
        return $this->hasMany(Product::class, 'product_id', 'id');
    }
}
