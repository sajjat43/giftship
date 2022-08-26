@extends('master')
@section('content')



<style>
    body {
        background: #eee
    }
</style>


@if (session('success'))
<div class="alert alert-success">
    {!! session('success') !!}
</div>
@endif

@if (session('error'))
<div class="alert alert-danger">
    {!! session('error') !!}
</div>
@endif
{{-- <a href="{{ route('create.pdf') }}" class="btn btn-success">PDF</a> --}}
<div class="container">
    <a class="nav-link btn btn-primary" style="width:90px" href="{{ route('request.list') }}"><i
            class="fa-solid fa-arrow-left"></i>
    </a>
    <div class="col-xl-3  mt-3">
        <button class="btn btn-light text-capitalize border-0" data-mdb-ripple-color="dark"
            onclick="printDiv('printableArea')"><i class="fas fa-print text-primary"></i> Print</button>
    </div>
    
</div>

<body oncontextmenu='return false' class='snippet-body'>

    
    <div class="card mt-5" id="" >
        <div class="container mt-5">
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
                                        @foreach ($request as $key => $request)
                                        <tr>
                                            <td>{{ $request->product->name }}</td>
                                            <td>{{ $request->quantity }}</td>
                                            <td>{{ $request->price }}</td>
                                            <td>{{ $request->sub_total }}</td>

                                            <td>

                                                {{ $request->status }}

                                            </td>
                                            <td>

                                                @if ($request->status == 'pending')
                                                <a href="{{ route('product.cancel', $request->id) }}"
                                                    class="btn btn-danger"><i
                                                        class="fa-solid fa-rectangle-xmark"></i></a>
                                                @endif
                                                @if ($request->status == 'pending')
                                                <a href="{{ route('product.approve', $request->id) }}"
                                                    class="btn btn-success"><i class="fa-solid fa-check"></i></a>
                                                @endif

                                            </td>
                                        </tr>
                                        @endforeach

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
    </div>
    <div class="card" id="printableArea" hidden>
        <div class="card-body">
            <div class="container mb-5 mt-3">
                <div class="row d-flex align-items-baseline">
                    <div class="col-xl-9">
                        <p style="color: #7e8d9f;font-size: 20px;">Invoice </p>
                    </div>
                    <hr>
                </div>
    
                <div class="container">
                    <div class="col-md-12">
                        <div class="text-center">
                            <h3 class="text-center font-weight-bold">OFDEM(online Fashion Store)</h3>
                          
                        </div>
    
                    </div>
    
    
                         <div class="row">
                        <div class="col-xl-8">
                            {{-- <p class="text-muted">Invoice</p> --}}
                            <ul class="list-unstyled">
                                <li class="text-muted">To: <span style="color:#5d9fc5 ;">{{$order->name}}
                                     
                                <li class="text-muted">{{$order->address}}</li>
                                {{-- <li class="text-muted">{{$request->user_city}}, {{$order->user_country}}</li> --}}
                                <li class="text-muted"><i class="fas fa-phone"></i> {{$order->mobile}}</li>
                                <ul class="list-unstyled">
                                    <li class="text-muted"><i class="fa-solid fa-clipboard-check"></i> <span
                                            class="fw-bold">ID:</span>#{{$order->id}}</li>
        
                                    <li class="text-muted"><i class="fa-solid fa-clipboard-check"></i> <span
                                            class="fw-bold">Transaction ID:</span>#{{$order->tran_id}}</li>
                                    <li class="text-muted"><i class="fa-solid fa-clipboard-check"></i></i> <span
                                            class="fw-bold">Order Date: </span>{{$order->created_at}}</li>
                                    <li class="text-muted"><i class="fa-solid fa-clipboard-check"></i> <span
                                            class="me-1 fw-bold">Payment Status:</span><span
                                            class="badge bg-warning text-black fw-bold">
                                            {{$order->payment_status}}</span></li>
                                    {{-- <li class="text-muted"><i class="fas fa-circle" style="color:#84B0CA ;"></i><span>Payment
                                            Status: </span><span class="badge bg-info">{{$request->payment_status}}</span></li>
                                    </br>
                                    <li class="text-muted"><i class="fas fa-circle" style="color:#84B0CA ;"></i><span>Payment
                                            Method: </span><span class="badge bg-info">{{$order->payment_method}}</span></li> --}}
                                </ul>
                            </ul>
                        </div>
                        <div class="col-xl-4">
                         
                            
                            
                        </div>
                    </div>
    
                    <div class="row my-2 mx-1 justify-content-center">
                        <table class="table">
                            <thead>
                                <tr>
                                    {{-- <th scope="col" class="text-center">Item ID</th> --}}
                                    <th scope="col" class="text-center">Item Name</th>
                                    <th scope="col" class="text-center">Quantity</th>
                                    <th scope="col" class="text-center">Price</th>
                                    <th scope="col" class="text-center">Sub Total</th>
                                    <th scope="col" class="text-center">Order Time</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($order->RequestDetails as $data)
                                <tr>
                                    <td class="text-center text-info">{{$data->product->name}}</td>
                                    {{-- <td class="text-center text-info">{{$data->item->product_name}}</td> --}}
                                    <td class="text-center ">{{$data->quantity}}</td>
                                    <td class="text-center ">{{$data->price}} .BDT</td>
                                    <td class="text-center ">{{$data->sub_total}} .BDT</td>
                                    <td class="text-center ">{{$data->created_at}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
    
                    </div>
                    <div class="row">
                        <div class="col-xl-8">
                            {{-- <p class="ms-3">Add additional notes and payment information</p> --}}
    
                        </div>
                        <div class="col-xl-3">
                            {{-- <ul class="list-unstyled">
                                <li class="text-muted ms-3"><span class="text-black me-4">SubTotal: </span>{{$order->total}}
                                    .BDT</li>
                            </ul> --}}
                           
                            <p class="text-black float-start"><span class="text-black me-3"> Delivery Fee: </span><span>50
                                    .BDT</span></p>
                                    <hr><br>
                                    
                                    <p class="text-black float-start"><span class="text-black me-3"> Discount:   </span><span>{{$order->discount }}
                                        .BDT</span></p> 
                                        <hr><br>
                            <p class="text-black float-start"><span class="text-black me-3"> Total Amount: </span><span
                                    style="font-size: 25px;">{{$order->total }} .BDT</span></p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-xl-10">
                            <p>Thank you for your order</p>
                        </div>
                    </div>
    
                </div>
            </div>
        </div>
    </div>
    
    <script>
        function printDiv(printableArea) {
            var printContents = document.getElementById(printableArea).innerHTML;
            var originalContents = document.body.innerHTML;

            document.body.innerHTML = printContents;

            window.print();

            document.body.innerHTML = originalContents;
        }
    </script>
</body>
@endsection


