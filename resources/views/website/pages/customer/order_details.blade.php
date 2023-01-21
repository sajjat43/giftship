@extends('website.master')
@section('content')



<style>
    body {
        background: #eee
    }
    .nav-link{
        padding: 20px;
        border-radius: 10px;
        background-color: black;

    }
    .text-right button{
        padding: 10px;
        border-radius: 10px;
        background-color: black;
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

<div class="container">
    <a class="nav-link btn btn-success" href="{{ route('order.customer') }}">Back
    </a>
    
    
</div>

<body oncontextmenu='return false' class='snippet-body'>

   
    <div class="card mt-5" >
        <div class="container mt-5">
            <div class="col-xl-3  text-right float-right ">
                <button class="btn btn-light text-capitalize border-0" data-mdb-ripple-color="dark"
                    onclick="printDiv('printableArea')"><i class="fas fa-print text-primary"></i> Print</button>
            </div>
            <div class="d-flex justify-content-center row"id="printableArea">
                <div class="row">
                    <div class="col-md-6">
                            <h3 class="text-uppercase">name: {{ auth()->user()->name }}</h3>
                        </div>
                    </div>  
                <div class="col-md-8">
                    <div class="p-3 bg-white rounded"">
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
    <script>
        function printDiv(printableArea) {
            var printContents = document.getElementById(printableArea).innerHTML;
            var originalContents = document.body.innerHTML;

            document.body.innerHTML = printContents;

            window.print();

            document.body.innerHTML = originalContents;
        }
    </script>

    @endsection