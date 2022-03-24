<?php

namespace App\Http\Controllers\Backend;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\RequestProduct;
use App\Http\Controllers\Controller;
use App\Models\RequestDetails;

class ProductController extends Controller
{


    //   --------------------------  product list and search method here------------------
    public function product_view()
    {
        $key = null;
        if (request()->search) {
            $key = request()->search;

            $product = Product::where('name', 'LIKE', '%' . $key . '%')
                ->orWhere('price', 'LIKE', '%' . $key . '%')
                ->get();
            return view('admin.pages.product', compact('product', 'key'));
        }
        $product = Product::with('Category')->get();
        return view('admin.pages.product', compact('product'));
    }

    public function product_create()
    {
        $categories = Category::all();
        return view('admin.pages.product_create', compact('categories'));
    }

    // ---------product store--------------

    public function product_store(Request $request)
    {
        $image_name = null;
        if ($request->hasfile('image')) {
            $image_name = date('Ymdhis') . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('/uploads/product', $image_name);
        }
        // dd($request->all());
        Product::create([
            'name' => $request->name,
            'category_id' => $request->category,
            // 'Cname' => $request->Cname,
            'price' => $request->price,
            'description' => $request->description,
            'image' => $image_name,
        ]);


        return redirect()->back()->with('success', 'Product has been Created Successfully');
    }

    // ---------product single view------------------

    public function ProductViewDetails($product_id)
    {
        $product = Product::find($product_id);

        return view('admin.pages.product_view', compact('product'));
    }
    // -------------- product delete-------------------

    public function DeleteProduct($product_id)
    {
        Product::find($product_id)->delete();
        return redirect()->back()->with('success', 'Product has beeen Deleted Successfully');
    }

    // ---------------category view---------------

    public function Category()
    {
        return view('admin.pages.Category');
    }
    // ------------category table-------------------

    public function Category_store(Request $request)
    {
        // dd($request->all());
        $image_Cname = null;
        if ($request->hasfile('Cimage')) {
            $image_Cname = date('Ymdhis') . '.' . $request->file('Cimage')->getClientOriginalExtension();
            $request->file('Cimage')->storeAs('/uploads/category', $image_Cname);
        }
        Category::create([

            'Cname' => $request->Cname,
            'Cdescription' => $request->Cdescription,
            'Cimage' => $image_Cname,
        ]);
        return redirect()->back()->with('success', 'Category has been Created Successfully');
    }
    // ----------------categoey view--------------------------

    public function Category_view()
    {
        $category = Category::all();
        return view('admin.pages.Category_view', compact('category'));
    }

    // -------------product uder category----------------



    // public function Category_delete($category_id){

    //     Category::find($category_id)->delete();
    //     return redirect()->back()->with('success', 'Product has beeen Deleted Successfully');
    // }

    // -------------------update product-------------------------------

    public function product_update(Request $request, $product_id)
    {
        $image_name = null;
        if ($request->hasfile('image')) {
            $image_name = date('Ymdhis') . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('/uploads/product', $image_name);
        }
        // dd($request->all());
        Product::find($product_id)->update([
            'name' => $request->name,
            'Product_category' => $request->product_category,
            'price' => $request->price,
            'description' => $request->description,
            'image' => $image_name,
        ]);
        return redirect()->route('product.view')->with('success', 'Product has been update Successfully');
    }
    // ----------------update view----------------
    public function product_edit($product_id)
    {
        $product = Product::find($product_id);

        return view('admin.pages.product_update', compact('product'));
    }
    // -----------------------------view cart-------------------------------

    public function cartview()
    {
        $carts = session()->get('cart');
        return view('website.pages.cart', compact('carts'));
    }
    // -----------add to cart--------------------

    public function addToCart($id)
    {


        $product = Product::find($id);
        if (!$product) {
            return redirect()->back()->with('message', 'no product found');
        }
        // dd('$cartExit');
        $cartExit = session()->get('cart');

        if (!$cartExit) {
            $cartData = [
                $id => [
                    'product_id' => $id,
                    'product_name' => $product->name,
                    'product_image' => array(
                        'image' => $product->image,
                    ),
                    'product_price' => $product->price,
                    'product_qty' => 1,
                ]
            ];
            session()->put('cart', $cartData);
            return redirect()->back()->with('message', 'product added to cart');
        }

        if (!isset($cartExit[$id])) {

            $cartExit[$id] = [
                'product_id' => $id,
                'product_name' => $product->name,
                'product_image' => array(
                    'image' => $product->image,
                ),
                'product_price' => $product->price,
                'product_qty' => 1,
            ];
            session()->put('cart', $cartExit);
            return redirect()->back()->with('message', 'product added to cart');
        }
        $cartExit[$id]['product_qty'] = $cartExit[$id]['product_qty'] + 1;

        session()->put('cart', $cartExit);
        return redirect()->back()->with('success', 'product add');
    }
    // --------clear cart--------
    public function clearCart()
    {
        session()->forget('cart');
        return redirect()->back()->with('success', 'cart cleared successfully');
    }
    //-----------remove individual item--------
    // public function removeCart(request $request)
    // {
    //     $cartExit::remove($request->id);
    //     // session()->forget($request->id);
    //     session()->forget('success', 'Item Cart Remove Successfully !');

    //     return redirect()->back()->with('success', 'item cleared successfully');
    // }

    // -------------------cheak out-------------------

    public function checkOut()
    {
        $carts = session()->get('cart');
        if ($carts) {
            $request = RequestProduct::create([
                'user_id' => auth()->user()->id,

            ]);
            foreach ($carts as $cart) {
                RequestDetails::create([
                    'user_id' => auth()->user()->id,
                    'request_id' => $request->id,
                    'product_id' => $cart['product_id'],
                    'quantity' => $cart['product_qty'],
                    'product_price' => $cart['product_price'],
                ]);
            }
            session()->forget('cart');
            return redirect()->back()->with('message', 'request placed Successfully');
        }
        return redirect()->back()->with('message', 'No data found in cart');
    }

    public function requestList(Request $request)
    {
        $request = RequestProduct::with('user')->get();
        return view('admin.request.requestList', compact('request'));
    }
    public function requestInvoice($id)
    {
        $request = RequestProduct::with('user', 'details')->where('id', $id)->first();
        return view('admin.request.invoice', compact('request'));
    }
}
