@extends('master')
@section('content')
    <div class="container-xl">
            <div class="card" style="width: 30rem; margin-left: 25%">
                <div class="card-body">
                  <h5 class="card-title">Employee Details</h5>
                  {{-- <img src="{{url('/uploads/uploads/product/'.$product->image)}}" style="border-radius:4px" margin-left="20%" height="200px" width="200px" alt="product image"> --}}
                  <p><b>Employee Name:  {{$employee->name}}</b></p>
                  <p><b>Email:  {{$employee->email}}</b></p>
                  <p><b>Mobile Number:  {{$employee->mobile}}</b></p>
                  <p><b>Gender:  {{$employee->gender}}</b></p>

                </div>
              </div>
    </div>
@endsection
