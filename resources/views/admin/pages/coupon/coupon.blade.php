@extends('master')
@section('content')
@if (session()->has('success'))
<p class="alert alert-success">
    {{ session()->get('success') }}
</p>
@endif

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>
            {{ $error }}
        </li>
        @endforeach
    </ul>
</div>
@endif
<form action="{{route('coupon.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <h1 class="text center py-3">Create Coupon</h1>
    <div class="form-group">
        <label for="">Coupon Code</label>
        <input type="text" class="form-control" id="coupon_Code" name="code" placeholder="Enter your coupon code">

    </div>
    
    <div class="form-group">
        <label for="">Taka</label>
        <input type="number" class="form-control" , name="value" placeholder="Enter your discount Amount">
    </div>
    <div class="form-group">
        <label for="">Expiry Date</label>
        <input type="date" class="form-control" id="expiry_date" name="expiry_date" >
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
{{-- <a class="nav-link" href="{{ url('product_view') }}"></a> --}}

@endsection