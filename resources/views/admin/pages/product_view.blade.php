@extends('master')
@section('content')
    <style>
        .card-body {
            box-shadow: 0px 0px 42px 1px;
        }

        img {
            margin-bottom: 30px;
        }

        .container {
            margin-left: 77px;

        }

        h1 {
            font-size: 30px !important;
        }

    </style>
    <div class="container-xl">
        <div class="card" style="width: 30rem; margin-left: 25%">
            <div class="card-body">
                <div class="container">
                    <h1 class="card-title">Product Details</h1>
                    <img src="{{ url('/uploads/uploads/product/' . $product->image) }}" style="border-radius:4px"
                        margin-left="20%" height="200px" width="200px" alt="product image">
                    <p><b>Product Name: {{ $product->name }}</b></p>
                    <p><b>Product Catagory Name: {{ $product->category->Cname }}</b></p>
                    <p><b>Product subCatagory: {{ $product->subcategory->subname }}</b></p>
                    <p><b>Product Price: {{ $product->price }}</b></p>
                    <p><b>Product Quantity: {{ $product->qty }}</b></p>
                    <p><b>Product Description: {{ $product->description }}</b></p>

                </div>

            </div>
        </div>
    </div>
@endsection
