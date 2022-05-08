@extends('master')
@section('content')
    <div class="container-xl">
        <div class="card" style="width: 30rem; margin-left: 25%">
            <div class="card-body">
                <h1 class="card-title">Customer Details</h1>
                {{-- <img src="{{url('/uploads/uploads/product/'.$product->image)}}" style="border-radius:4px" margin-left="20%" height="200px" width="200px" alt="product image"> --}}
                <p><b>Employee Name: {{ $customer->name }}</b></p>
                <p><b>Email: {{ $customer->email }}</b></p>
                <p><b>Mobile Number: {{ $customer->mobile }}</b></p>
                <p><b>Mobile Number: {{ $customer->address }}</b></p>
                <p><b>Gender: {{ $customer->gender }}</b></p>

            </div>
        </div>
    </div>
@endsection
