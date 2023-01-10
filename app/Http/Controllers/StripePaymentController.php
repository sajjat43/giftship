<?php

namespace App\Http\Controllers;

use Stripe\Charge;
use Stripe\Stripe;
use App\Models\order;
use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\RequestDetails;
use App\Models\RequestProduct;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class StripePaymentController extends Controller
{
    public function stripe()
    {
        $carts = session()->get('cart');
        return view('website.pages.stripe.strip',compact('carts'));
    }
  
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripePost(Request $request)
    {
        Stripe::setApiKey(env('STRIPE_SECRET'));
        Charge::create([
                "amount" => 100 * 100,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "Test payment from ofdem.com." 
        ]);
        try{
            $order = order::create([
                'user_id' => auth()->user()->id,
                
                'discount' =>(session()->get('coupon')['discount']),
                'payment_method'=>'SSL',
                'name' => $request->name,
                'email' => $request->email,
                'mobile' => $request->mobile,
                'Address' => $request->Address,
                'total' =>array_sum(array_column(session()->get('cart'),'subtotal'))+50-(session()->get('coupon')['discount']),
                
            ]);
        
    }catch (\Throwable $th){
        $order = order::create([
            'user_id' => auth()->user()->id,
           
            'payment_method'=>'SSL',
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
                    RequestDetails::create([
    
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
                    $message->subject('order confirm'); 
                });
    
                // if($session=session()->has('coupon')){
                //     $session=session()->get('coupon')['name'];
                // dd($session);
                // $coupon=Coupon::where('code',$session)->first();
                // $coupon->update([
                //     'expiry_date'=>'2022-08-23',
                // ]);
                // }
                session()->forget('cart');
                session()->forget('coupon');
                // $coupon=Coupon::find($id);
                // return redirect(route('manage.home'))->with('message', 'request placed Successfully');
            }
        Session::flash('success', 'Payment successful!');
          
        return back();
    }
}
