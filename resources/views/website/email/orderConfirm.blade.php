<h1>Your oder confirm</h1>

<h2>Your order List</h2>
<div class="d-flex justify-content-center row"id="printableArea">
    <div class="row">
        <div class="col-md-6">
                <h3 class="text-uppercase">name: {{ auth()->user()->name }}</h3>
            </div>
        </div>  
        <div class="d-flex justify-content-center row"id="printableArea">
            <div class="row">
                <div class="col-md-6">
                        <h3 class="text-uppercase">name: {{ auth()->user()->name }}</h3>
                    </div>
                </div>  
            <div class="col-md-8">
                <div class="p-3 bg-white rounded">
                    <div class="row">
                        <div class="col-md-6">
                            {{-- <h3 class="text-uppercase">{{ $request->user->name }}</h3> --}}
        
                        </div>
                    </div>
                    <div class="mt-3">
                        <div class="table-responsive">
                            <table class="table">
        
                                <thead>
                                    <tr>
                                        <th>Product Name</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                        <th>sub total</th>
                                        <th>Status</th>
        
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- @dd($request) --}}
                                    @foreach ($newOrder->RequestDetails as  $request)
                                    <tr>
                                        <td>{{ $request->product->name }}</td>
                                        <td>{{ $request->quantity }}</td>
                                        <td>{{ $request->price }}</td>
                                        <td>{{ $request->sub_total }}</td>
        
                                        <td>
        
                                            {{ $request->status }}
        
                                        </td>
                                        
                                    </tr>
                                    @endforeach
                                  
                                    <tr>
                                        <td colspan="3"></td>
                                        <td style="font-size:15px;font-weight:bold;border-top:1px solid #ccc;">shipping: 50</td>
                                    </tr>
                                    <tr>
                                        <td colspan="3"></td>
                                        <td style="font-size:15px;font-weight:bold;border-top:1px solid #ccc;">total:{{$newOrder->total}}.BDT</td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                    {{-- <div class="text-right mb-3"><button class="btn btn-danger btn-sm mr-5"
                            type="button"></button>
                    </div> --}}
                </div>
            </div>
        </div>
</div>

