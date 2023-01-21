<?php

namespace App\Http\Controllers\Backend\wishList;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class wishListController extends Controller
{

    public function wishListView()
    {
        // $product = Product::find($id);
        $wishList = session()->get('wishlist');
        
        // dd($carts);
       
        return view('website.pages.wishList', compact('wishList'));
    }



    public function add_to_wishlist($id)
    {

        $product = Product::find($id);
        if (!$product) {
            return redirect()->back();
        }

        $wishExist = session()->get('wishlist');

        if (!$wishExist) {
            //case 01: cart is empty.
            //  action: add product to cart
            $wishData = [
                $id => [
                    'product_id' => $id,
                    'product_name' => $product->name,
                    'product_price' => $product->price,

                ]
            ];
            session()->put('wishlist', $wishData);
            Toastr::success('Wished successfully', 'success');
            return redirect()->back();
        }
        if (!isset($wishExist[$id])) {
            $wishExist[$id] = [
                'product_id' => $id,
                'product_name' => $product->name,
                'product_price' => $product->price,

            ];

            session()->put('wishlist', $wishExist);
            Toastr::success('Wished successfully', 'success');
            return redirect()->back();
        } else {
            $updatedWish = session()->get('wishlist');
            unset($updatedWish[$id]);
            session()->put('wishlist', $updatedWish);
            Toastr::warning('successfully remove Item');
            return redirect()->back();
        }

        return redirect()->back();
    }

    public function wishlistclear()
    {
        session()->forget('wishlist');
        Toastr::warning('clear successfully');
        return redirect()->back();
    }
}
