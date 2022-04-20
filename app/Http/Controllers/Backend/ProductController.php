<?php

namespace App\Http\Controllers\Backend;

use App\Models\Brand;
use App\Models\order;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\RequestDetails;
use App\Models\RequestProduct;
use App\Http\Controllers\Controller;

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
        $brand = Brand::all();
        return view('admin.pages.product_create', compact('categories', 'brand'));
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
            'brand_id' => $request->brand,
            'price' => $request->price,
            'description' => $request->description,
            'image' => $image_name,
        ]);


        return redirect()->back()->with('success', 'Product has been Created Successfully');
    }

    // ---------backend product single view------------------

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
    //---------------- category update-------------
    // public function category_edit($category_id)
    // {
    //     $category = Category::find($category_id);

    //     return view('admin.pages.categoryUpdate', compact('category'));
    // }
    public function category_update_view($category_id)
    {
        $category = Category::find($category_id);
        return view('admin.pages.categoryUpdate', compact('category'));
    }
    // category database update
    public function category_update(Request $request, $category_id)
    {
        $image_Cname = null;
        if ($request->hasfile('Cimage')) {
            $image_Cname = date('Ymdhis') . '.' . $request->file('Cimage')->getClientOriginalExtension();
            $request->file('Cimage')->storeAs('/uploads/category', $image_Cname);
        }
        // dd($request->all());

        Category::find($category_id)->update([
            'Cname' => $request->Cname,
            'Cdescription' => $request->Cdescription,
            'Cimage' => $image_Cname,
        ]);
        return redirect()->route('product.category.view')->with('success', 'category has been update Successfully');
    }
    // delete category
    public function DeleteCategory($category_id)
    {
        Category::find($category_id)->delete();
        $product = product::where('category_id', $category_id)->delete();
        return redirect()->back()->with('success', 'Product has beeen Deleted Successfully');
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
            'category_id' => $request->category,
            'brand_id' => $request->brand,
            'price' => $request->price,
            'description' => $request->description,
            'image' => $image_name,
            'featured' => $request->featured,
        ]);



        return redirect()->route('product.view')->with('success', 'Product has been update Successfully');
    }
    // ----------------update product view----------------

    public function product_edit($product_id)
    {
        $product = Product::find($product_id);

        return view('admin.pages.product_update', compact('product'));
    }

    //    product request list (admin view)

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
    //  product approve and calcel
    public function productApprove($id)
    {
        $request = RequestDetails::find($id);
        $approved = $request->update([
            'status' => 'approved'
        ]);
        return redirect()->back()->with('message', ' Product Approve');
    }
    public function productCancel($id)
    {
        $request = RequestDetails::find($id);
        $request->update([
            'status' => 'cancel'
        ]);
        return redirect()->back()->with('message', ' Product Cancel');
    }

    // all brand
    public function BrandCreate()
    {
        return view('admin.pages.create_Brand');
    }

    public function BrandStore(Request $request)
    {
        // dd($request->all());
        $image_Bname = null;
        if ($request->hasfile('Bimage')) {
            $image_Bname = date('Ymdhis') . '.' . $request->file('Bimage')->getClientOriginalExtension();
            $request->file('Bimage')->storeAs('/uploads/Brand', $image_Bname);
        }
        Brand::create([

            'Bname' => $request->Bname,
            'Bdescription' => $request->Bdescription,
            'Bimage' => $image_Bname,
        ]);
        return redirect()->back()->with('success', 'Brand has been Created Successfully');
    }
    public function BrandView()
    {
        $brand = Brand::all();
        return view('admin.pages.Brand_view', compact('brand'));
    }



    //                                =========================forentend start=======================



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
                    'sub_total' => $product->price,
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
                'sub_total' => $product->price,
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
    // card qty update
    public function cartQty_update(request $request, $product_id)
    {
        $carts = session()->get('cart');
        $product = Product::find($product_id);



        // if($product->available_quantity>=$request->quantity)
        // {
        $carts[$product_id]['product_qty'] = $request->product_qty;
        $carts[$product_id]['sub_total'] = $request->product_qty * $carts[$product_id]['sub_total'];


        session()->put('cart', $carts);
        return redirect()->back()->with('message', 'Quantity update');
        // }
        // Toastr::error('Stock Out', 'Sorry !!!');
        // return redirect()->back();
    }


    //-----------remove individual item--------
    // public function removeCart(request $request)
    // {
    //     $cartExit::remove($request->id);
    //     // session()->forget($request->id);
    //     session()->forget('success', 'Item Cart Remove Successfully !');

    //     return redirect()->back()->with('success', 'item cleared successfully');
    // }

    // -------------------cheak out / oder-------------------

    public function checkOut(request $request)
    {
        order::create([
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'Address' => $request->Address,

        ]);

        $carts = session()->get('cart');
        if ($carts) {
            $total = 0;
            $request = RequestProduct::create([
                'user_id' => auth()->user()->id,

            ]);
            foreach ($carts as $cart) {
                RequestDetails::create([
                    'user_id' => auth()->user()->id,
                    'request_id' => $request->id,
                    'product_id' => $cart['product_id'],
                    'quantity' => $cart['product_qty'],
                    'product_price' => $cart['product_price'] * $cart['product_qty'],
                    'total_price' => $total += $cart['product_price'] * $cart['product_qty'],
                ]);
            }
            session()->forget('cart');
            return redirect(route('manage.home'))->with('message', 'request placed Successfully');
        }
        return redirect()->back()->with('message', 'No data found in cart');
    }
    // check out form

    public function checkOut_form()
    {
        return view('website.pages.checkOut');
    }
    public function checkOut_store(Request $request)
    {
        order::create([
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'Address' => $request->Address,

        ]);


        return redirect()->back()->with('success', 'Product has been Created Successfully');
    }



    // forentend product single view

    public function product_single_view($id)
    {
        $product = Product::find($id);
        // dd($product);
        return view('website.pages.productSingleView', compact('product'));
    }

    // featured product slider

    public function featured_product()
    {
        $product = Product::where('featured', '1')->take(10)->get();
        return view('website.pages.featured.featuredProduct', compact('product'));
    }
}
