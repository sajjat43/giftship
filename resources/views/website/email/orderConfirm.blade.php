<h2>Your oder confirm</h2>

<p>Hi <strong>{{ auth()->user()->name }}</strong> Your order List</p>
<div class="d-flex justify-content-center row"id="printableArea">
    <div class="row">
        <div class="col-md-6">
            <p class="text-uppercase">Moblie:{{$newOrder->mobile}} </p>
                <p class="text-uppercase">Shiping Address: {{$newOrder->Address}} </p>
            </div>
        </div>  
        <div class="d-flex justify-content-center row">
            
            <div class="col-md-8">
                <div class="p-3 bg-white rounded">
                    <div class="row">
                        <div class="col-md-6">
                            {{-- <h3 class="text-uppercase">{{ $request->user->name }}</h3> --}}
        
                        </div>
                    </div>
                    <div class="mt-3">
                        <div class="table-responsive">
                            <table style="width: 600px; text-align:right" class="table">
        
                                <thead>
                                    <tr>
                                        <th>Product Name</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                        <th>sub total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- @dd($request) --}}
                                    @foreach ($newOrder->RequestDetails as  $request)
                                    <tr>
                                        <td>{{ $request->product->name }}</td>
                                        <td>{{ $request->quantity }}</td>
                                        <td>{{ $request->price }} </td>
                                        <td>{{ $request->sub_total }} TK</td>
                                        
                                    </tr>
                                    @endforeach
                                    @if($session=session()->has('coupon'))
                                    <tr>
                                        <td colspan="3"></td>
                                      
                                        <td style="font-size:15px;font-weight:bold;border-top:1px solid #ccc;">Discount:  -{{$session=session()->get('coupon')['discount']}} TK</td>
                                            
                                    </tr>
                                    @endif
                                    <tr>
                                        <td colspan="3"></td>
                                        <td style="font-size:15px;font-weight:bold;border-top:1px solid #ccc;">shipping: 50 TK</td>
                                       
                                    </tr>
                                    <tr>
                                        <td colspan="3"></td>
                                        <td style="font-size:15px;font-weight:bold;border-top:1px solid #ccc;">total:  {{$newOrder->total}} TK</td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="text-right mb-3">
                        <h5>You want more shoping 
                        <a href="{{route('manage.home')}}" style="pading:10px; border:1px solid black; border-radius: 4px;background-color: yellow;
                        text-decoration: none;" type="button">Click here </a></h5>
                            
                    </div>
                </div>
            </div>
        </div>
</div>

