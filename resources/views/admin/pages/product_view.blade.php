@extends('master')
@section('content')
    <div class="container-xl">
        <div class="card" style="width: 30rem; margin-left: 25%">
            <div class="card-body">
                <h5 class="card-title">Product Details</h5>
                <img src="{{ url('/uploads/uploads/product/' . $product->image) }}" style="border-radius:4px"
                    margin-left="20%" height="200px" width="200px" alt="product image">
                <p><b>Product Name: {{ $product->name }}</b></p>
                <p><b>Product Catagory Name: {{ $product->category->Cname }}</b></p>
                <p><b>Product Price: {{ $product->price }}</b></p>
                <p><b>Product Description: {{ $product->description }}</b></p>

            </div>
        </div>
    </div>
@endsection
