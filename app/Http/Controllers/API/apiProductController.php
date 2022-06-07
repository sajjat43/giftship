<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class apiProductController extends Controller
{
    public function productCreate(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'name' => 'required',
            'price' => 'required',
            'qty' => 'required',
            'description' => 'required',

        ]);
        if ($validate->fails()) {
            return $this->responseWithError($validate->getMessageBag());
        }
        $product = Product::create([
            'name' => $request->name,
            'category_id' => $request->category,
            'subcategory_id' => $request->subcategory,
            'brand_id' => $request->brand,
            'price' => $request->price,
            'qty' => $request->qty,
            'description' => $request->description,

        ]);
        return $this->responseWithSuccess($product, 'product Created successfully');
    }
}
