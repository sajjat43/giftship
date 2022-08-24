<?php

namespace App\Http\Controllers\Backend;

use Carbon\Carbon;
use App\Models\Brand;
use App\Models\order;
use App\Models\Coupon;
use App\Models\Product;
use App\Models\Category;
use App\Models\subCategory;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\RequestDetails;
use App\Models\RequestProduct;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Mail;

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
                ->paginate(10);
                
            return view('admin.pages.product.product', compact('product', 'key'));
        }
        $product = Product::with('Category')->orderBy('id','DESC')->paginate(10);
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
         'qty' =>$request->qty,
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

   

   

    //    product request list (admin view)

    public function requestList(Request $request)
    {
        $request = order::with('user','RequestDetails')->get();

        return view('admin.request.requestList', compact('request'));
    }
    public function requestInvoice($id)
    {
        $request = RequestDetails::where('order_id', $id)->get();
        // dd($request);
        
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

   



    //   =========================forentend start=======================




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
            return view('website.pages.product.search_product', compact('product', 'key'));
        }
        else{
            Toastr::error('search by product name', 'failed');
            return redirect()->back();
        }

        $product = Product::all();
        return view('website.pages.product.search_product', compact('product'));
    }
    

    public function checkOut(request $request )
    {
        // dd($request);

        try{
            $order = order::create([
                'user_id' => auth()->user()->id,
                'name' => $request->name,
                'email' => $request->email,
                'mobile' => $request->mobile,
                'Address' => $request->Address,
                'total' =>array_sum(array_column(session()->get('cart'),'subtotal'))+50-(session()->get('coupon')['discount']),
                
            ]);
        
    }catch (\Throwable $th){
        $order = order::create([
            'user_id' => auth()->user()->id,
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'Address' => $request->Address,
            'total' =>array_sum(array_column(session()->get('cart'),'subtotal'))+50,
            
        ]);
    }
    
        $carts = session()->get('cart');
        if ($carts) {
            $total = 0;
            $request = RequestProduct::create([
                'user_id' => auth()->user()->id,

            ]);
            foreach ($carts as $key => $cart) {
                $detalis=RequestDetails::create([

                    'user_id' => auth()->user()->id,
                    'order_id'=>$order->id,
                    'request_id' => $request->id,
                    'product_id' => $cart['product_id'],
                    'quantity' => $cart['product_qty'],
                    'price' =>$cart['product_price'],
                    'sub_total' => $cart['product_price'] * $cart['product_qty'],
                    // 'total_price' => $total += $cart['product_price'] * $cart['product_qty'],
                ]);
                $product = Product::find($key);
                $product->decrement('qty', $cart['product_qty']);
            }


            $token = Str::random(64);
            $newOrder=Order::where('id',$order->id)->with('RequestDetails','RequestDetails.product')->first();
            Mail::send('website.email.orderConfirm',compact('newOrder'), function ($message) use ($request) {
                $message->to(auth()->user()->email);
                $message->subject('order confirem'); 
            });


            if($session=session()->has('coupon')){
                $session=session()->get('coupon')['name'];
            // dd($session);
            $coupon=Coupon::where('code',$session)->first();
            $coupon->update([
                'expiry_date'=>'2022-08-23',
            ]);
            }
            session()->forget('cart');
            session()->forget('coupon');
           
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
public function cash_checkOut_form(){
    // $coupon=Coupon::find('code');
    // dd($coupon);
    $carts = session()->get('cart');
        
    return view('website.pages.cash_checkout',compact('carts'));
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
        return view('website.pages.product.singleView', compact('product'));
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
