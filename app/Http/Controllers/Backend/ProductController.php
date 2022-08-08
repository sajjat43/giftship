<?php

namespace App\Http\Controllers\Backend;

use App\Models\Brand;
use App\Models\order;
use App\Models\Product;
use App\Models\Category;
use App\Models\subCategory;
use Illuminate\Http\Request;
use App\Models\RequestDetails;
use App\Models\RequestProduct;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

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
                
            return view('admin.pages.product.product', compact('product', 'key'));
        }
        $product = Product::with('Category')->get();
        // ddd($product);
        return view('admin.pages.product.product', compact('product'));
    }

    public function product_create()
    {
        $categories = Category::all();
        $brand = Brand::all();
        return view('admin.pages.product.product_create', compact('categories', 'brand'));
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
        $request->validate([

            'name' => 'required',
            'price' => 'required|numeric|gt:0',
            'qty' => 'required|numeric|gt:0',
            'description' => 'required',
            'image' => 'required',

        ]);
        Product::create([
            'name' => $request->name,
            'category_id' => $request->category,
            'subcategory_id' => $request->subcategory,
            'brand_id' => $request->brand,
            'price' => $request->price,
            'qty' => $request->qty,
            'description' => $request->description,
            'image' => $image_name,
        ]);


        return redirect()->back()->with('success', 'Product has been Created Successfully');
    }

    // ---------backend product single view------------------

    public function ProductViewDetails($product_id)
    {
        $product = Product::find($product_id);

        return view('admin.pages.product.product_view', compact('product'));
    }
    // -------------- product delete-------------------

    public function DeleteProduct($product_id)
    {
        Product::find($product_id)->delete();
        return redirect()->back()->with('success', 'Product has beeen Deleted Successfully');
    }
 // -------------------update product-------------------------------

 public function product_update(Request $request, $product_id)
 {
     $product = Product::find($product_id);
     $image_name = $product->image;
     if ($request->hasfile('image')) {
         $image_name = date('Ymdhis') . '.' . $request->file('image')->getClientOriginalExtension();
         $request->file('image')->storeAs('/uploads/product', $image_name);
     }
     $request->validate([

         'name' => 'required',
         'price' => 'required|numeric|gt:0',
         'qty' => 'required|numeric|gt:0',
         'description' => 'required',
         

     ]);
     // dd($request->all());

     Product::find($product_id)->update([
         'name' => $request->name,
         'category_id' => $request->category,
         'subcategory_id' => $request->subcategory,
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

     return view('admin.pages.product.product_update', compact('product'));
 }
    
    //subCategory

    public function subCategoryCreate()
    {
        return view('admin.pages.sub_category.subCategory');
    }
    public function subCategoryStore(Request $request)
    {
        // dd($request->all());
        $image_subname = null;
        if ($request->hasfile('subimage')) {
            $image_subname = date('Ymdhis') . '.' . $request->file('subimage')->getClientOriginalExtension();
            $request->file('subimage')->storeAs('/uploads/subcategory/', $image_subname);
        }
        $request->validate([

            'subname' => 'required',
            'subdescription' => 'required',
            'subimage' => 'required',


        ]);

        subCategory::create([

            'subname' => $request->subname,
            'subdescription' => $request->subdescription,
            'subimage' => $image_subname,
        ]);
        // Category::create($request->all());
        return redirect()->back()->with('success', 'subCategory has been Created Successfully');
    }
    // subcategory view
    public function subCategoryView()
    {
        $subcategory = subCategory::all();
        return view('admin.pages.sub_category.subCategory_view', compact('subcategory'));
    }
    public function updateForm($id){
        $subcategory=subCategory::find($id);
        return view('admin.pages.sub_category.sub_categoryUpdate',compact('subcategory'));
    }
    public function subCategoryUpdate(Request $request, $id){
        $subcategory = subCategory::find($id);
        $image_subname = $subcategory->subimage;
        if ($request->hasfile('subimage')) {
            $image_subname = date('Ymdhis') . '.' . $request->file('subimage')->getClientOriginalExtension();
            $request->file('subimage')->storeAs('/uploads/subcategory/', $image_subname);
        }
        // dd($request->all());

        subCategory::find($id)->update([
            'subname' => $request->subname,
            'subdescription' => $request->subdescription,
            'subimage' => $image_subname,
        ]);
        
        return redirect()->route('product.subCategory.view')->with('success', 'Subcategory has been update Successfully');
    }


   

    //    product request list (admin view)

    public function requestList(Request $request)
    {
        $request = order::with('user','RequestDetails')->get();

        return view('admin.request.requestList', compact('request'));
    }
    public function requestInvoice($id)
    {
        $request = RequestProduct::with('user', 'details')->where('user_id', $id)->first();
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
        return view('admin.pages.brand.create_Brand');
    }

    public function BrandStore(Request $request)
    {
        // dd($request->all());
        $image_Bname = null;
        if ($request->hasfile('Bimage')) {
            $image_Bname = date('Ymdhis') . '.' . $request->file('Bimage')->getClientOriginalExtension();
            $request->file('Bimage')->storeAs('/uploads/Brand', $image_Bname);
        }
        $request->validate([

            'Bname' => 'required',
            'Bdescription' => 'required',
            'Bimage' => 'required',


        ]);

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
        return view('admin.pages.brand.Brand_view', compact('brand'));
    }



    //   =========================forentend start=======================



    // -----------------------------view cart-------------------------------

    // product search
    public function productSearchView()
    {
        $key = null;
        // dd(request()->search);
        if (request()->search) {
            $key = request()->search;
            $product = Product::where('name', 'LIKE', '%' . $key . '%')
                ->orWhere('price', 'LIKE', '%' . $key . '%')
                ->get();
            return view('website.pages.search_product', compact('product', 'key'));
        }

        $product = Product::all();
        return view('website.pages.search_product', compact('product'));
    }


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

    public function checkOut(request $request)
    {
        // dd($request);

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
            foreach ($carts as $key => $cart) {
                RequestDetails::create([
                    'user_id' => auth()->user()->id,
                    'request_id' => $request->id,
                    'product_id' => $cart['product_id'],
                    'quantity' => $cart['product_qty'],
                    'product_price' => $cart['product_price'] * $cart['product_qty'],
                    'total_price' => $total += $cart['product_price'] * $cart['product_qty'],
                ]);
                $product = Product::find($key);
                $product->decrement('qty', $cart['product_qty']);
            }

            session()->forget('cart');
            return redirect(route('manage.home'))->with('message', 'request placed Successfully');
        }
        return redirect()->back()->with('message', 'No data found in cart');
    }
    // check out form

    public function checkOut_form()
    {
        $carts = session()->get('cart');
        
        return view('website.pages.checkOut',compact('carts'));
    }
    public function checkOut_store(Request $request)
    {
        order::create([
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'Address' => $request->Address,

        ]);


        return redirect()->back()->with('success', 'request placed Successfully');
    }



    // forentend product single view

    public function product_single_view($id)
    {
        $product = Product::find($id);
        // dd($product);
        return view('website.pages.singleView', compact('product'));
    }

    // featured product slider

    public function featured_product()
    {
        $product = Product::where('featured', '1')->take(5)->get();
        return view('website.pages.featured.featuredProduct', compact('product'));
    }
    // public function dashboardView(){
    //     return view('admin.Dashboard.Dashboard');
    // }
}
