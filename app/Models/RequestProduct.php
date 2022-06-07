<?php

namespace App\Models;

use App\Models\RequestDetails;
use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RequestProduct extends Model
{
    use HasFactory;
    protected $table = "request_products";
    protected $guarded = [];

    public function  user()
    {
        return $this->belongsTo(User::class);
    }

    public function details()
    {
        return $this->hasMany(RequestDetails::class, 'request_id', 'id');
    }
}
