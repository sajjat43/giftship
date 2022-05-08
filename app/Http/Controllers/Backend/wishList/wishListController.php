<?php

namespace App\Http\Controllers\Backend\wishList;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class wishListController extends Controller
{

    public function wishListView()
    {
        $wishList = session()->get('wishlist');
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
            return redirect()->back()->with('message', 'Wished successfully');
        }
        if (!isset($wishExist[$id])) {
            $wishExist[$id] = [
                'product_id' => $id,
                'product_name' => $product->name,
                'product_price' => $product->price,

            ];

            session()->put('wishlist', $wishExist);
            return redirect()->back()->with('message', 'Wished successfully');
        } else {
            $updatedWish = session()->get('wishlist');
            unset($updatedWish[$id]);
            session()->put('wishlist', $updatedWish);
            return redirect()->back()->with('message', 'successfullay remove Item');
        }

        return redirect()->back();
    }

    public function wishlistclear()
    {
        session()->forget('wishlist');
        return redirect()->back()->with('message', 'clear successfully');
    }
}
