@extends('website.master')
@section('content')



<style>
    body {
        background: #eee
    }
    .float-right button{
        padding: 10px;
        border-radius: 10px;
    }
    .a{
        padding: 20px;
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
    
</div>

<body oncontextmenu='return false' class='snippet-body'>

    
    <div class="card mt-5" >
        
        <div class=" mt-5">
            
            <div class="d-flex justify-content-center row">
                <div class="col-md-8">
                    <div class="col-xl-3 float-right mt-3">
                        <button class="btn btn-light text-capitalize border-0" data-mdb-ripple-color="dark"
                            onclick="printDiv('printableArea')"><i class="fas fa-print text-primary"></i> Print</button>
                    </div>
                    <div class="p-3 bg-white rounded " id="printableArea">
                        <div class="row">
                        <div class="col-md-6">
                                <h3 class="text-uppercase">name: {{ auth()->user()->name }}</h3>
                            </div>
                        </div>    
                        <div class="mt-3">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                           
                                            <th scope="col">Total price</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Payment Method</th>
                                            <th scope="col">Payment Status</th>
                                            <th scope="col">order Status</th>
                                            <th scope="col">Action</th>
                            
                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($request as $key => $request)
                                        
                                        <tr>
                                            <th scope="row">{{ $key + 1 }}</th>
                                          
                            
                                                <td>
                                                    {{ $request->total }} TK
                                                </td>
                                                <td>
                                                    {{$request->created_at}}
                                                </td>
                                            </td>
                                            <td>{{$request->payment_method}}</td>
                                            
                                                <td>
                                                    {{ $request->payment_status }}
                                                </td>
                                                @if($request->status == 'pending')
                                                <td><a style=" background-color:rgb(247, 12, 12); padding: 20px; border-radius:8px;" class="btn btn-danger" href="{{route('order.cancle',$request->id)}}">Cancel</a></td>
                                                @else
                                                <td>{{$request->status}}</td>
                                                @endif
                            
                                            
                                                  <td>
                                                <a href="{{ route('order.customer.details', $request->id) }}" class="btn btn-success a">View</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
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

    @endsection