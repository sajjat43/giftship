<?php

namespace App\Http\Controllers\Fontend;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CartController extends Controller
{
    public function cartview()
    {
        $product=Product::all();
        $carts = session()->get('cart');
        return view('website.pages.cart', compact('carts','product'));
    }
    // -----------add to cart--------------------

    public function addToCart($id)
    {
        $product = Product::find($id);
        
        if (!$product) {
            return redirect()->back();
        }

        $cartExist = session()->get('cart');

        if (!$cartExist) {
            //case 01: cart is empty.
            //  action: add product to cart

            $cartData = [
                $id => [
                    'product_id' => $id,
                    'product_name' => $product->name,
                    'product_price' => $product->price,
                    'product_qty' => 1,
                    'subtotal' => $product->price,
                ]
            ];
            session()->put('cart', $cartData);
        }

        //case 02: cart is not empty. but product does not exist into the cart
        //action: add different product with quantity 1
        if (!isset($cartExist[$id])) {

            $cartExist[$id] = [
                'product_id' => $id,
                'product_name' => $product->name,
                'product_price' => $product->price,
                'product_qty' => 1,
                'subtotal' => $product->price,
            ];

            session()->put('cart', $cartExist);
            return redirect()->back();
        }


        //case 03: product exist into cart
        //action: increase product quantity (quantity+1)

        $cartExist[$id]['product_qty'] = $cartExist[$id]['product_qty'] + 1;
        # for updating the subtotal
        $cartExist[$id]['subtotal'] = $cartExist[$id]['product_price'] * $cartExist[$id]['product_qty'];

        session()->put('cart', $cartExist);
        return redirect()->back();
    }


    // --------clear cart--------
    public function clearCart()
    {
        session()->forget('cart');
        return redirect()->back()->with('success', 'cart cleared successfully');
    }


     // card qty update
     public function cartQty_update(Request $request, $product_id)
     {
         // dd($request);
         $carts = session()->get('cart');
         $product = Product::find($product_id);
         
 
         if ($product->qty >= $request->quantity) {
 
             if ($request->quantity > 0) {
                 $carts[$product_id]['product_qty'] = $request->quantity;
                 $carts[$product_id]['subtotal'] = $request->quantity * $carts[$product_id]['product_price'];
 
                 session()->put('cart', $carts);
                 return redirect()->back()->with('message', 'Quantity update');
             }
             
             return redirect()->back()->with('message', 'Negative Quantity Not possible');
         }
         return redirect()->back()->with('message', 'Sorry Quantity is not abliable');
     }
}
