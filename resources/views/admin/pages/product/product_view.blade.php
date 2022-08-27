@extends('master')
@section('content')
<style>
    .card-body {
        box-shadow: 0px 0px 42px 1px;
    }

    img {
        margin-bottom: 30px;
    }

    .a {
        margin-left: 77px;
        font-family: auto;

    }

    .item {
        color: black;
    }

    strong {
        margin-right: 10px;

    }

    h1 {
        font-size: 30px !important;
    }
</style>
<div class="container-xl">
    <div class="card" style="width: 30rem; margin-left: 25%">
        <div class="card-body">
            <div class="container ">
                <div class="a">
                    <h1 class="card-title">Product Details</h1>
                    <img src="{{ url('/uploads/uploads/product/' . $product->image) }}" style="border-radius:4px"
                        margin-left="20%" height="200px" width="200px" alt="product image">
                </div>
                <div class="container ">
                    <h5 class="item"><strong>Product Name:</strong> {{ $product->name }}</h5>
                    <h5 class="item"><strong>Product Catagory Name: </strong>{{ $product->category->Cname }}</h5>
                    <h5 class="item"><strong>Product subCatagory: </strong>{{ $product->subcategory->subname }}</h5>
                    <h5 class="item"><strong>Brand: </strong>{{ $product->brand->Bname }}</h5>
                    <h5 class="item"><strong>Product Price: </strong>{{ $product->price }}</h5>
                    <h5 class="item"><strong>Product Quantity: </strong>{{ $product->qty }}</h5>
                    <h5 class="item"><strong>Product Description: </strong>{{ $product->description }}</h5>
                </div>

            </div>

        </div>
    </div>
</div>
@endsection