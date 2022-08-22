@extends('website.master')
@section('content')


@if (session()->has('message'))
<p class="alert alert-success">
    {{ session()->get('message') }}
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
<style>
    
    .small-img-group {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
    }

    .small-img-col {
        flex-basis: 24%;
        cursor: pointer;
    }

    .sproduct select {
        display: block;
        padding: 5px 10px;
    }

    .sproduct input {
        width: 50px;
        height: 40px;
        padding-left: 10px;
        font-size: 16px;
        margin-right: 10px;
    }

    .sproduct input:focus {
        outline: none;
    }

    .buy-btn {
        background: #f88408;
        border-radius: 3px;
        padding: 9px;
        margin-bottom: 28px;
        opacity: 1;
        transform: 0.3s all;
    }
    .wish-btn {
        background: #129544;
        border-radius: 3px;
        padding: 9px;
        margin-bottom: 28px;
        opacity: 1;
        transform: 0.3s all;
    }

    .nice {
        margin-right: 7px;
    }

    .container h2,
    h3,
    span {
        font-family: 'Font Awesome 5 Free';
    }
    h1{
        color: red;
    }
</style>


<body>
    <section class="container sproduct my-5 pt-5">
        <div class="row mt-5">
            <div class="col-lg-5 col-md-12 col-12">
                <img class="img-fluid w-100 pb-1" id="mainImg"
                    src="{{ url('/uploads/uploads/product/', $product->image) }}" alt="">

                <div class="small-img-group">
                    <div class="small-img-col">
                        <img src="{{ url('/uploads/uploads/product/', $product->image) }}" width="100%"
                            class="small-img" alt="">
                    </div>
                    <div class="small-img-col">
                        <img src="{{ url('/uploads/uploads/product/', $product->image) }}" width="100%"
                            class="small-img" alt="">
                    </div>
                    <div class="small-img-col">
                        <img src="{{ url('/uploads/uploads/product/', $product->image) }}" width="100%"
                            class="small-img" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-12">
                <h6>product/single/view </h6>
                <h5 class="py-4"> Available Quantity: <strong>{{$product->qty}}</strong></h5>
                <h3 class="py-4">name: {{ $product->name }}</h3>
                <h3 class="py-4">Subcategory: {{ $product->subcategory->subname }}</h3>
                <h3 class="py-4">Brand: {{ $product->brand->Bname }}</h3>
                <h2>BDT: {{ $product->price }}</h2>
                {{-- <select class="my-3 nice">
                    <option>select size</option>
                    <option>XXL</option>
                    <option>XL</option>
                    <option>L</option>
                    <option>M</option>
                    <option>S</option>
                </select> --}}
                {{-- <input type="number" value="1"> --}}
                @if ($product->qty > 0)
                <a class="buy-btn" type="button" href="{{ route('add.to.cart', $product->id) }}"> Add to
                    Cart</a>
                    
                        <a class="wish-btn" href="{{ route('add.to.wishlist', $product->id) }}" type="button">add to wishlist
                        </a>
                        @else
                            <h1 >Sorry Quantity not Abaliable</h1>
                        
                  @endif
                <h4 class="mt-5 mb-5">product details</h4>
                <span> {{ $product->description }}</span>


            </div>
        </div>

    </section>
    <script>
        var mainImg = document.getElementById('mainImg');
            var smallimg = document.getElementsByClassName('small-img');
            smallimg[0].onclick = function() {
                mainImg.src = smallimg[0].src;
            }
            smallimg[1].onclick = function() {
                mainImg.src = smallimg[1].src;
            }
            smallimg[2].onclick = function() {
                mainImg.src = smallimg[2].src;
            }
    </script>
</body>
    @endsection