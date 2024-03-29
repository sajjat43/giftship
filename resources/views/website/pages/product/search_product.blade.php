{{-- ----------------product------------ --}}
@extends('website.master')
@section('content')
<div class="container">
    <div class="row special-list">
@if($product->count()>0)
        @foreach ($product as $product)
        <div class="col-lg-4 col-md-6 special-grid best-seller shedo gx-5 ">
            <a href="{{ route('product.single.view', $product->id) }}">
                <div class="products-single fix">

                    <div class="box-img-hover">
                        <div class="type-lb">
                            {{-- <p class="sale"></p> --}}
                        </div>
                        <div class="image">
                            <img style="height: 200px" src="{{ url('/uploads/uploads/product/', $product->image) }}"
                                class="img-fluid" alt="Image">
                        </div>
                        <div class="mask">
                            <ul>
                                <li><a href="{{ route('product.single.view', $product->id) }}" data-toggle="tooltip"
                                        data-placement="right" title="View"><i class="fas fa-eye"></i></a>
                                </li>
                            </ul>
                            <a href="{{ route('product.single.view', $product->id) }}">view detials</a>
                        </div>
                    </div>
                    <div class="why-text detailscart">
                        <h4>{{ $product->name }}</h4>
                        <h5>BDT: {{ $product->price }}</h5>
                        <h5> {{ $product->description }}</h5>
                        @if ($product->qty > 0)
                        <div class="container">
                            <label class="badge bg-success text-center" style="width: 80px">In
                                Stock</label>
                            <a href="{{ route('add.to.cart', $product->id) }}" class="btn btn-primary">add
                                cart</a>
                            <a href="{{ route('add.to.wishlist', $product->id) }}" type="button"><i
                                    class="far fa-heart"></i></a>
                        </div>
                        @else
                        <label class="badge bg-danger text-center" style="width: 80px">Stock
                            Out</label>
                        <a href="{{ route('add.to.wishlist', $product->id) }}" type="button"><i
                                class="far fa-heart"></i></a>
                        @endif
                    </div>
                </div>
            </a>
        </div>
        @endforeach
@else
<h1 class="text-center pt-5"> product Not found</h1>
@endif

    </div>
</div>
<style>
    .best-seller {
        box-shadow: 43px !important;
    }

    .detailscart h4 {
        font-size: 25px !important;
        font-family: Arial, Helvetica, sans-serif;
    }

    .detailscart h5 {
        font-size: 17px !important;

    }

    .shedo {

        /* border: 2px solid seashell; */
        margin: 40px;
        box-shadow: 5px 5px 5px rgb(192, 183, 183);
        width: 100%;
        display: flex;
        /* justify-content: space-between; */
        max-width: 300px !important;
        margin-bottom: 30px;
        padding: 10px;

    }

    .detailscart a {
        padding: 15px 20px;
        border-radius: 10px;
    }

    .image:hover {
        transform: scale(1.5)
    }

    .detailscart h4,
    h5 {
        font-family: 'Font Awesome 5 Free';
    }

    .fa-heart {
        color: red;

    }

    .fa-heart:hover {
        color: black;

    }

    .container {
        margin-top: 25px !important;
    }
</style>
@endsection