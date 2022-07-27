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
    {{-- latest---------------------------------------- / --}}
    {{-- <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">

            <div class="item active">
                @foreach ($latestProduct as $latest)
                <img src="{{ url('/uploads/uploads/product/', $latest->image) }}" alt="product image">
                @endforeach
            </div>

        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div> --}}


    {{-- latest product start --}}

    <div class="py-5">
        <div class="container">
            <div class="row">
                <h2 class="text-center py-5">Latest Product</h2>
                <div class="owl-carousel featured-carousel owl-theme">
                    @foreach ($latestProduct as $latest)
                    {{-- @dd($data) --}}
                    <div class="item ">
                        <div class="card  py-2">
                            <img style="height: 219px; width: 215px;"
                                src="{{ url('/uploads/uploads/product/', $latest->image) }}" alt="product image">
                            <div class="card-body">
                                <h5>Name: {{ $latest->name }}</h5>
                                <span class="float-start">Price: {{ $latest->price }} .BDT</span>
                            </div>
                            @if ($latest->qty > 0)
                            <label class="badge bg-success text-center" style="width: 80px">In Stock</label>
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
                                <label class="badge bg-danger">Stock Out</label>
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
                <div class="owl-carousel featured-carousel owl-theme">
                    @foreach ($featuredProduct as $item)
                    {{-- @dd($data) --}}
                    <div class="item ">
                        <div class="card  py-2">
                            <img style="height: 219px; width: 215px;"
                                src="{{ url('/uploads/uploads/product/', $item->image) }}" alt="product image">
                            <div class="card-body">
                                <h5>Name: {{ $item->name }}</h5>
                                <span class="float-start">Price: {{ $item->price }} .BDT</span>
                                @if ($item->qty > 0)
                                <label class="badge bg-success text-center" style="width: 80px">In Stock</label>
                                <div class="container "> <a href="{{ route('add.to.cart', $item->id) }}"
                                        class="btn btn-info col-md-6 text-center">add
                                        cart</a>
                                    <a href="{{ route('add.to.wishlist', $item->id) }}" type="button"><i
                                            class="far fa-heart"></i>
                                    </a>
                                </div>
                                @else
                                <label class="badge bg-danger text-center" style="width: 80px">Stock
                                    Out</label>
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
                                                {{-- <li><a href="#" data-toggle="tooltip" data-placement="right"
                                                        title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                                <li><a href="#" data-toggle="tooltip" data-placement="right"
                                                        title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                                --}}
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

        {{-- =============================== shop by category ================================== --}}

        {{-- <section class="categories">

            <div class="container">
                <div class="container-fluid">
                    <div class="row">
                        @foreach ($categories as $key => $data)
                        <div class="col-md-1"></div>
                        <div class=" col-md-4  p-0">

                            <div class="categories__item set-bg gx-5" data-setbg="">
                                <img src="{{ url('uploads/uploads/category/', $data->Cimage) }}" class="img-fluid"
                                    alt="category image">
                                <div class="categories__text">
                                    <h4>{{ $data->Cname }}</h4>
                                    <p>{{ $data->Cdescription }}</p> --}}
                                    {{-- <a href="{{ route('shop.catagory', $data->Cid) }}" class="btn btn-primary">Shop
                                        now</a> --}}
                                    {{-- <a href="{{ route('product.under.catagory', $data->id) }}"
                                        class="btn btn-primary shop">Shop now</a>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-1"></div>
                        @endforeach

                    </div>
                </div>
            </div>

        </section> --}}











        {{-- <div class="col-xl-4 col-lg-6">
            <div class="single-category mb-30">
                <div class="category-img">
                    <img src="{{url('Frontend/assets/img/categori/xcat1.jpg.pagespeed.ic.O08VptWAEH.jpg')}}" alt="">
                    <div class="category-caption">
                        <h2>Owmen`s</h2>
                        <span class="best"><a href="#">Best New Deals</a></span>
                        <span class="collection">New Collection</span>
                    </div>
                </div>
            </div>
        </div> --}}
        {{-- <div class="col-xl-4 col-lg-6">
            <div class="single-category mb-30">
                <div class="category-img text-center">
                    <img src="{{url('Frontend/assets/img/categori/xcat2.jpg.pagespeed.ic.C7_93LfgY4.jpg')}}" alt="">
                    <div class="category-caption">
                        <span class="collection">Discount!</span>
                        <h2>Winter Cloth</h2>
                        <p>New Collection</p>
                    </div>
                </div>
            </div>
        </div> --}}
        {{-- <div class="col-xl-4 col-lg-6">
            <div class="single-category mb-30">
                <div class="category-img">
                    <img src="{{url('Frontend/assets/img/categori/xcat3.jpg.pagespeed.ic.kefuyYjmzI.jpg')}}" alt="">
                    <div class="category-caption">
                        <h2>Man`s Cloth</h2>
                        <span class="best"><a href="#">Best New Deals</a></span>
                        <span class="collection">New Collection</span>
                    </div>
                </div>
            </div>
        </div> --}}
        {{-- </div>
        </div> --}}
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

                        {{-- <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home"
                                    role="tab" aria-controls="nav-home" aria-selected="true">All</a>
                                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile"
                                    role="tab" aria-controls="nav-profile" aria-selected="false">New</a>
                                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact"
                                    role="tab" aria-controls="nav-contact" aria-selected="false">Featured</a>
                                <a class="nav-item nav-link" id="nav-last-tab" data-toggle="tab" href="#nav-last"
                                    role="tab" aria-controls="nav-contact" aria-selected="false">Offer</a>
                            </div>
                        </nav> --}}

                    </div>
                </div>
            </div>

            {{-- text carousel --}}
            {{-- <div class="col-lg-3 col-md-6 special-grid top-featured">
                <div class="products-single fix">
                    @foreach ($product as $product)
                    <a href="{{route('crisis.view', $product->id)}}">
                        <img class="product-image" style="width: 150px; height: 150px"
                            src="{{url('/uploads/uploads/product/'.$product->image)}}" alt="Item 1">
                        <div class="box-img-hover">
                            <div class="mask-icon">

                                <a class="cart" href="#" type="btn btn-success">Add to Cart</a>
                            </div>
                        </div>
                        <div class="why-text">
                            <h4>{{$product->name}}</h4>
                            <h5>BDT: {{$product->price}}</h5>
                        </div>
                        @endforeach
                </div>
            </div> --}}
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


                @foreach ($product as $product)
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
                                    <a class="addwish" href="{{ route('add.to.wishlist', $product->id) }}"
                                        type="button"><i class="far fa-heart"></i>
                                        <h5 class="wish">Add to wishlist</h5>
                                    </a>

                                </div>
                                @else
                                <label class="badge bg-danger text-center" style="width: 80px">Stock
                                    Out</label>
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
        </div>
        </div>








        {{-- <div class="gallery-wrapper lf-padding">
            <div class="gallery-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="gallery-items">
                            <img src="{{ url('Frontend/assets/img/gallery/xgallery1.jpg.pagespeed.ic.vLqzDjhJUZ.jpg') }}"
                                alt="">
                        </div>
                        <div class="gallery-items">
                            <img src="{{ url('Frontend/assets/img/gallery/xgallery2.jpg.pagespeed.ic.L2xM7uh2Xk.jpg') }}"
                                alt="">
                        </div>
                        <div class="gallery-items">
                            <img src="{{ url('Frontend/assets/img/gallery/xgallery3.jpg.pagespeed.ic.mB-kgLdr08.jpg') }}"
                                alt="">
                        </div>
                        <div class="gallery-items">
                            <img src="{{ url('Frontend/assets/img/gallery/xgallery4.jpg.pagespeed.ic.QOWWARNbVe.jpg') }}"
                                alt="">
                        </div>
                        <div class="gallery-items">
                            <img src="{{ url('Frontend/assets/img/gallery/xgallery5.jpg.pagespeed.ic.i5qoUrRGe1.jpg') }}"
                                alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
</main>
<script>
    $('.product-carousel').slick({
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
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });
</script>
@endsection