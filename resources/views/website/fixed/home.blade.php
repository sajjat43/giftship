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
<main>

    <div class="slider-area ">

        <div class="slider-active">
            <div class="single-slider slider-height" data-background="assets/img/hero/h1_hero.jpg">
                <div class="container">
                    <div class="row d-flex align-items-center justify-content-between">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 d-none d-md-block">
                            <div class="hero__img" data-animation="bounceIn" data-delay=".4s">
                                <img src="{{ url('Frontend/assets/img/hero/hero_man.png') }}" alt="">
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-5 col-md-5 col-sm-8">
                            <div class="hero__caption">
                                <span data-animation="fadeInRight" data-delay=".4s">60% Discount</span>
                                <h1 data-animation="fadeInRight" data-delay=".6s">Winter <br> Collection</h1>
                                <p data-animation="fadeInRight" data-delay=".8s">Best Cloth Collection By 2020!</p>

                                <div class="hero__btn" data-animation="fadeInRight" data-delay="1s">
                                    <a href="industries.html" class="btn hero-btn">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider slider-height" data-background="assets/img/hero/h1_hero.jpg">
                <div class="container">
                    <div class="row d-flex align-items-center justify-content-between">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 d-none d-md-block">
                            <div class="hero__img" data-animation="bounceIn" data-delay=".4s">
                                <img src="{{ url('Frontend/assets/img/hero/hero_man.png') }}" alt="">
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-5 col-md-5 col-sm-8">
                            <div class="hero__caption">
                                <span data-animation="fadeInRight" data-delay=".4s">60% Discount</span>
                                <h1 data-animation="fadeInRight" data-delay=".6s">Winter <br> Collection</h1>
                                <p data-animation="fadeInRight" data-delay=".8s">Best Cloth Collection By 2020!</p>

                                <div class="hero__btn" data-animation="fadeInRight" data-delay="1s">
                                    <a href="industries.html" class="btn hero-btn">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    {{-- latest product start --}}

    <div class="py-5">
        <div class="container ">
            <div class="row">
                <h2 class="text-center py-5">Latest Product</h2>
                <div id="product-carousel" class="owl-carousel  featured-carousel owl-theme">
                    @foreach ($latestProduct as $latest)
                    {{-- @dd($data) --}}
                    <div class="item ">
                        <div class="card  py-2">
                            <img style="height: 219px; width: 215px;"
                                src="{{ url('/uploads/uploads/product/', $latest->image) }}" alt="product image">
                            <div class="card-body">
                                @if ($latest->qty > 0)
                                <label class="badge bg-success text-center" style="width: 80px">In Stock</label>
                                @else
                                <label class="badge bg-danger text-center" style="width: 80px">Stock
                                    Out</label>
                                @endif
                                <h5>Name: {{ $latest->name }}</h5>
                                <span class="float-start">Price: {{ $latest->price }} .BDT</span>
                            </div>
                            @if ($latest->qty > 0)

                            <div class="latest ">
                                <div>
                                    <a href="{{ route('add.to.cart', $latest->id) }}"
                                        class="btn btn-info col-md-12 text-center">add
                                        cart</a>
                                </div>
                                <div>
                                    <a href="{{ route('add.to.wishlist', $latest->id) }}" type="button"><i
                                            class="far fa-heart"></i>

                                    </a>
                                </div>
                            </div>
                            @else
                            <div>

                                <a href="{{ route('add.to.wishlist', $latest->id) }}" type="button"><i
                                        class="far fa-heart"></i>
                                </a>
                            </div>
                            @endif
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <style>
        .card {
            height: 451px;
        }

        .card img {
            height: 219px;
            width: 215px;
        }

        .btn-info {
            padding: 13px;
            font-size: 12px;
            margin-right: 10px;
        }

        .container {
            margin-top: 80px;
        }

        .latest {
            margin-top: 20px;
            display: flex;
            justify-content: space-evenly;
        }
    </style>


    {{-- ------------------------------------- feature product ----------------------- --}}

    <div class="py-5">
        <div class="container">
            <div class="row">
                <h2 class="text-center py-5"><strong>Featured Product</strong></h2>
                <div id="product-carousel" class="owl-carousel featured-carousel owl-theme">
                    @foreach ($featuredProduct as $item)

                    <div class="item ">
                        <div class="card  py-2">
                            <img style="height: 219px; width: 215px;"
                                src="{{ url('/uploads/uploads/product/'. $item->image) }}" alt="product image">
                            <div class="card-body">
                                @if ($item->qty > 0)
                                <label class="badge bg-success text-center" style="width: 80px">In Stock</label>
                                @else
                                <label class="badge bg-danger text-center" style="width: 80px">Stock
                                    Out</label>
                                @endif
                                <h5>Name: {{ $item->name }}</h5>
                                <span class="float-start">Price: {{ $item->price }} .BDT</span>
                                @if ($item->qty > 0)

                                <div class="container "> <a href="{{ route('add.to.cart', $item->id) }}"
                                        class="btn btn-info col-md-6 text-center">add
                                        cart</a>
                                    <a href="{{ route('add.to.wishlist', $item->id) }}" type="button"><i
                                            class="far fa-heart"></i>
                                    </a>
                                </div>
                                @else

                                <a href="{{ route('add.to.wishlist', $item->id) }}" type="button"><i
                                        class="far fa-heart"></i>

                                </a>
                                @endif
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>



    {{-- category css --}}


    <section class="category-area section-padding30">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <div class="section-tittle text-center mb-85">
                        <h2>Shop by Category</h2>
                    </div>
                </div>
            </div>
            <div class="row">


                {{-- =============================== shop by category ================================== --}}

                {{-- cateogry --}}
                <style>
                    .caa {
                        width: 100%;
                        margin-left: 30px;

                    }

                    .shedoC {
                        margin: 0px;
                        margin-right: 56px;
                        box-shadow: 13px 10px 18px 2px rgb(192 183 183);
                        width: 100%;
                        display: flex;
                        max-width: 240px !important;
                        margin-bottom: 28px;
                        padding: 13px;
                    }

                    .descc h4 h5 h6 {
                        font-family: initial !important;
                    }
                </style>
                <div class="container">
                    <div class="row special-list ca">


                        @foreach ($categories as $key => $data)
                        <div class="col-lg-3 col-md-6 special-grid best-seller shedoC caa  ">
                            <a href="{{ route('product.under.catagory', $data->id) }}">
                                <div class="products-single fix">
                                    <div class="box-img-hover">
                                        <div class="type-lb">

                                        </div>
                                        <img style="height: 200px"
                                            src="{{ url('uploads/uploads/category/', $data->Cimage) }}"
                                            class="img-fluid" alt="Image">
                                        <div class="mask-icon">
                                            <ul>
                                                <li><a href="{{ route('shop.catagory', $data->Cid) }}"
                                                        data-toggle="tooltip" data-placement="right" title="View"><i
                                                            class="fas fa-eye"></i></a></li>

                                            </ul>
                                        </div>
                                    </div>
                                    <div class="why-text descc">
                                        <h4>{{ $data->Cname }}</h4>
                                        <h5> {{ $data->Cdescription }}</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                        @endforeach


                    </div>
                </div>
            </div>
        </div>





    </section>


    <section class="latest-product-area padding-bottom">
        <div class="container">
            <div class="row product-btn d-flex justify-content-end align-items-end">

                <div class="col-xl-4 col-lg-5 col-md-5">
                    <div class="section-tittle mb-30">
                        <h2>ALL Products</h2>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-7 col-md-7">
                    <div class="properties__button f-right">
                    </div>
                </div>
            </div>


            {{-- ------------------------product style --}}
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
            {{-- ----------------product------------ --}}

            <div class="row special-list">


                @foreach ($products as $product)
                <div class="col-lg-4 col-md-6 special-grid best-seller shedo gx-5 ">
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
                            <div>
                                @if ($product->qty > 0)
                                <label class="badge bg-success text-center" style="width: 80px">In Stock</label>
                                @else
                                <label class="badge bg-danger text-center" style="width: 80px">Stock
                                    Out</label>
                                @endif
                            </div>
                            <div class="why-text detailscart">
                                <h4>{{ $product->name }}</h4>
                                <h5>BDT: {{ $product->price }}</h5>
                                <h5> {{ $product->description }}</h5>
                                @if ($product->qty > 0)
                                <div class="container">

                                    <a href="{{ route('add.to.cart', $product->id) }}" class="btn btn-primary">add
                                        cart</a>
                                    <a class="addwish" href="{{ route('add.to.wishlist', $product->id) }}"
                                        type="button"><i class="far fa-heart"></i>
                                        <h5 class="wish">Add to wishlist</h5>
                                    </a>
                                </div>
                                @else
                                <a class="addwish" href="{{ route('add.to.wishlist', $product->id) }}" type="button"><i
                                        class="far fa-heart"></i>
                                    <h5 class="wish">Add to wishlist</h5>
                                </a>
                                @endif
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
              

            </div>
                
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-6">
                            {{ $products->links() }}
                        </div>
                    </div>
                </div>
        </div>
        </div>


</main>
<script>
    $('#product-carousel').slick({
            lazyLoad: 'ondemand',
            slidesToShow: 4,
            slidesToScroll: 1,
            nextArrow: '<i class="arrow right">',
            prevArrow: '<i class="arrow left">',
            infinite: true,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                        infinite: true,
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
</script>
@endsection