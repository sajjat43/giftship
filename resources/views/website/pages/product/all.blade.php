@extends('website.master')
@section('content')
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

        border-radius: 11px;
        margin: 37px;
        box-shadow: 11px 11px 20px 9px rgb(192 183 183);
        width: 100%;
        display: flex;
        max-width: 306px !important;
        margin-bottom: 33px;
        padding: 11px;

    }

    .detailscart a {
        padding: 15px 20px;
        border-radius: 10px;
    }

    .image:hover {
        transform: scale(1.5)
    }

    .image img {
        height: 200px;
        margin-left: 27px;
        border-radius
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

    .addwish h5 {
        opacity: 0;
        padding: 0;
        margin: 0;
        background-color: red;

    }

    .addwish:hover h5 {
        opacity: 1;
        display: contents;
        padding: 10px;
        background-color: red;
        color: rgb(255, 0, 0);
    }
</style>
<style>
    .add-to-cart{
        padding: 17px;
    margin-top: 66px;
   border-radius: 5px;
   color:rgb(0, 0, 0);
   font-weight: 600;
        background-color: transparent;
        border: 1px solid rgb(34, 34, 34);
    }
    .wishlist{
        border-radius: 5px;
        
        padding: 20px 40px;
        background-color: transparent;
        border: 1px solid rgb(34, 34, 34);
    }
    .add-to-cart:hover{
        color: green;
    }
    .wishlist:hover i{
        color: green;
    }
    .image img {
  
    margin-left: 45px;
    
}
.why-text.detailscart {
    text-align: center;
}
.shedo {
    
    box-shadow: 5px 0px 20px -1px rgb(192 183 183);
    margin-right: 25px;
    
}
.main-product{
    opacity: 0;
}
.main-product-section:hover .main-product{
    opacity: 1;
    /* transition-delay:2s; */
}



.main-product-section {
  position: relative;
  width: 50%;
}

.image {
  display: block;
  width: 100%;
  height: auto;
}

.main-product {
  position: absolute;
  top:10;
  border-radius: 10px;
  bottom: 0;
  left: 0;
  right: 0;
  background-color: #9ea0a16b;
  /* opacity: 0.1; */
  overflow: hidden;
  width: 100%;
  height: 0;
  transition: .5s ease;
}

.main-product-section:hover .main-product {
  height: 100%;
}

.text {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}
.add_link{
    margin: 135px 45px 30px -75px;
}
.detailscart a {
    padding: 13px 20px;
    border-radius: 5px;
}
.detailscart a.wishlist {
    padding: 10px 44px;
    margin: -37px 15px 40px 60px;
    border-radius: 5px;
}
</style>
{{-- ----------------product------------ --}}

<div class="row special-list ">


    @foreach ($products as $product)
    <div class="col-lg-4 col-md-6 special-grid best-seller shedo gx-5 main-product-section ">
        <a href="{{ route('product.single.view', $product->id) }}">
            <div class="products-single fix">

                <div class="box-img-hover">
                    <div class="type-lb">
                        {{-- <p class="sale"></p> --}}
                    </div>
                    <div class="image">


                        <img style="height: 200px"
                            src="{{ url('/uploads/uploads/product/', $product->image) }}" class="img-fluid"
                            alt="Image">
                    </div>
                    <div class="mask">
                        <ul>
                            <li>
                                <a href="{{ route('product.single.view', $product->id) }}"
                                    data-toggle="tooltip" data-placement="right" title="View"><i
                                        class="fas fa-eye"></i>
                                </a>
                            </li>
                        </ul>
                        <a href="{{ route('product.single.view', $product->id) }}">view detials</a>
                    </div>
                </div>
                <div class="text-center">
                    @if ($product->qty > 0)
                    <label class="badge bg-success text-center" style="width: 80px">In Stock</label>
                    @else
                    <label class="badge bg-danger text-center" style="width: 80px">Stock
                        Out</label>
                    @endif
                </div>
                <div class="why-text detailscart">
                    <h4>Name: {{ $product->name }}</h4>
                    <h5>BDT: {{ $product->price }}</h5>
                    {{-- <h5> {{ $product->description }}</h5> --}}
                    {{-- @if ($product->qty > 0)
                    <div class="container">
                        <a href="{{ route('add.to.cart', $product->id) }}" class="btn btn-primary">add
                            cart</a>
                        <a class="addwish" href="{{ route('add.to.wishlist', $product->id) }}"
                            type="button"><i class="far fa-heart"></i>
                            <h5 class="wish">Add to wishlist</h5>
                        </a>
                    </div>
                    
                    @endif --}}
                    @if ($product->qty > 0)
                    <div class="container main-product">
                        
                      <div class="add_link">
                        <a href="{{ route('add.to.cart', $product->id) }}" class="add-to-cart ">add
                            cart</a>
                      </div>
                       <div class="wish_link">
                        <a class="wishlist text" href="{{ route('add.to.wishlist', $product->id) }}"
                            type="button"><i class="far fa-heart"></i>
                            {{-- <h5 class="wish">Add to wishlist</h5> --}}
                        </a>    
                       </div>
                    </div>
                    @endif
                </div>
            </div>
        </a>
    </div>
    @endforeach


</div>

@endsection
