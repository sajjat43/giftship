@extends('website.master')
@section('content')

<main>

    <div class="slider-area ">

        <div class="slider-active">
            <div class="single-slider slider-height" data-background="assets/img/hero/h1_hero.jpg">
                <div class="container">
                    <div class="row d-flex align-items-center justify-content-between">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 d-none d-md-block">
                            <div class="hero__img" data-animation="bounceIn" data-delay=".4s">
                                <img src="{{url('Frontend/assets/img/hero/hero_man.png')}}" alt="">
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
                                <img src="{{url('Frontend/assets/img/hero/hero_man.png')}}" alt="">
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
{{-- category css  --}}


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
<div class="row special-list">


    @foreach ($categories as $key=>$data )
<div class="col-lg-3 col-md-6 special-grid best-seller">
    <div class="products-single fix">
        <div class="box-img-hover">
            <div class="type-lb">

            </div>
            <img style="height: 200px" src="{{url('uploads/uploads/category/',$data->Cimage)}}" class="img-fluid" alt="Image">
            <div class="mask-icon">
                <ul>
                    <li><a href="{{route('shop.catagory',$data->Cid)}}" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="why-text">
            <h4>{{$data->Cname}}</h4>
            <h5> {{$data->Cdescription}}</h5>
        </div>
    </div>
</div>
    @endforeach


</div>
</div>
</div>


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
                        <h2>Latest Products</h2>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-7 col-md-7">
                    <div class="properties__button f-right">

                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">All</a>
                                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">New</a>
                                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Featured</a>
                                <a class="nav-item nav-link" id="nav-last-tab" data-toggle="tab" href="#nav-last" role="tab" aria-controls="nav-contact" aria-selected="false">Offer</a>
                            </div>
                        </nav>

                    </div>
                </div>
            </div>

{{-- text carousel --}}
{{-- <div class="col-lg-3 col-md-6 special-grid top-featured">
    <div class="products-single fix">
        @foreach($product as $product)
        <a href="{{route('crisis.view', $product->id)}}">
            <img class="product-image" style="width: 150px; height: 150px" src="{{url('/uploads/uploads/product/'.$product->image)}}" alt="Item 1">
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
<style>
.best-seller{
    box-shadow: 43px;
}
.detailscart{
    font-size: 30px;
    font-family: Arial, Helvetica, sans-serif;
}

</style>


<div class="row special-list">


    @foreach ($product as $product )
<div class="col-lg-3 col-md-6 special-grid best-seller">
    <div class="products-single fix">
        <div class="box-img-hover">
            <div class="type-lb">
                {{-- <p class="sale"></p> --}}
            </div>
            <img style="height: 200px" src="{{url('/uploads/uploads/product/',$product->image)}}" class="img-fluid" alt="Image">
            <div class="mask-icon">
                <ul>
                    <li><a href="{{route('crisis.view',$product->id)}}" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                    {{-- <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li> --}}
                </ul>
                <a class="cart" href="">Add to Cart</a>
            </div>
        </div>
        <div class="why-text detailscart">
            <h4>{{$product->name}}</h4>
            <h5>BDT: {{$product->price}}</h5>
            <h5> {{$product->description}}</h5>
        </div>
    </div>
</div>
    @endforeach


</div>
</div>
</div>




{{-- careousal start  --}}

            {{-- <div class="product-carousel">
                <div class="product">
                  <div class="product-top">
                    @foreach($product as $product)
                    <a href="{{route('crisis.view', $product->id)}}">
                        <img class="product-image" style="width: 150px; height: 150px" src="{{url('/uploads/uploads/product/'.$product->image)}}" alt="Item 1">

                  </div>
                  <div class="product-bottom">
                    <p class="product-prices">
                      <span class="product-name">{{$product->name}}</span>

                      <span class="product-prices">{{$product->price}}</span>
                      <span class="description">{{$product->description}}</span>
                    </p>
                    <a href="" class="button" type="btn btn-success">Shop Now</a>


                  </div>

                </div>
                @endforeach
            </div> --}}



             <!-- Featured Starts Here -->
    {{-- <div class="featured-items">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <div class="line-dec"></div>
                        <h1>Featured Items</h1>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme">
                        @foreach($product as $product)
                            <a href="{{route('crisis.view', $product->id)}}">
                                <div class="featured-item" style="width: 250px;height: 300px;">
                                    <img style="width: 150px; height: 150px" src="{{url('/uploads/uploads/product/'.$product->image)}}" alt="Item 1">
                                    <h4>{{$product->name}}</h4>
                                    <h6>BDT {{$product->price}}</h6>
                                    <button class="btn btn-primary">Add to cart</button>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Featred Ends Here -->
{{-- <div class="container">
	<div class="row">
		<div class="col-md-12">
			<h2>Trending <b>Products</b></h2>
			<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="0">
			<!-- Carousel indicators -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>
			<!-- Wrapper for carousel items -->
			<div class="carousel-inner">
				<div class="carousel-item active">
					<div class="row">
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="/examples/images/products/ipad.jpg" class="img-fluid" alt="">
								</div>
								<div class="thumb-content">
									<h4>Apple iPad</h4>
									<p class="item-price"><strike>$400.00</strike> <span>$369.00</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
									<a href="#" class="btn btn-primary">Add to Cart</a>
								</div>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="/examples/images/products/headphone.jpg" class="img-fluid" alt="">
								</div>
								<div class="thumb-content">
									<h4>Sony Headphone</h4>
									<p class="item-price"><strike>$25.00</strike> <span>$23.99</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
									<a href="#" class="btn btn-primary">Add to Cart</a>
								</div>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="/examples/images/products/macbook-air.jpg" class="img-fluid" alt="">
								</div>
								<div class="thumb-content">
									<h4>Macbook Air</h4>
									<p class="item-price"><strike>$899.00</strike> <span>$649.00</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
										</ul>
									</div>
									<a href="#" class="btn btn-primary">Add to Cart</a>
								</div>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="/examples/images/products/nikon.jpg" class="img-fluid" alt="">
								</div>
								<div class="thumb-content">
									<h4>Nikon DSLR</h4>
									<p class="item-price"><strike>$315.00</strike> <span>$250.00</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
									<a href="#" class="btn btn-primary">Add to Cart</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="carousel-item">
					<div class="row">
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="/examples/images/products/play-station.jpg" class="img-fluid" alt="">
								</div>
								<div class="thumb-content">
									<h4>Sony Play Station</h4>
									<p class="item-price"><strike>$289.00</strike> <span>$269.00</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
									<a href="#" class="btn btn-primary">Add to Cart</a>
								</div>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="/examples/images/products/macbook-pro.jpg" class="img-fluid" alt="">
								</div>
								<div class="thumb-content">
									<h4>Macbook Pro</h4>
									<p class="item-price"><strike>$1099.00</strike> <span>$869.00</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
										</ul>
									</div>
									<a href="#" class="btn btn-primary">Add to Cart</a>
								</div>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="/examples/images/products/speaker.jpg" class="img-fluid" alt="">
								</div>
								<div class="thumb-content">
									<h4>Bose Speaker</h4>
									<p class="item-price"><strike>$109.00</strike> <span>$99.00</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
									<a href="#" class="btn btn-primary">Add to Cart</a>
								</div>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="/examples/images/products/galaxy.jpg" class="img-fluid" alt="">
								</div>
								<div class="thumb-content">
									<h4>Samsung Galaxy S8</h4>
									<p class="item-price"><strike>$599.00</strike> <span>$569.00</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
									<a href="#" class="btn btn-primary">Add to Cart</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="carousel-item">
					<div class="row">
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="/examples/images/products/iphone.jpg" class="img-fluid" alt="">
								</div>
								<div class="thumb-content">
									<h4>Apple iPhone</h4>
									<p class="item-price"><strike>$369.00</strike> <span>$349.00</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
									<a href="#" class="btn btn-primary">Add to Cart</a>
								</div>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="/examples/images/products/canon.jpg" class="img-fluid" alt="">
								</div>
								<div class="thumb-content">
									<h4>Canon DSLR</h4>
									<p class="item-price"><strike>$315.00</strike> <span>$250.00</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
									<a href="#" class="btn btn-primary">Add to Cart</a>
								</div>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="/examples/images/products/pixel.jpg" class="img-fluid" alt="">
								</div>
								<div class="thumb-content">
									<h4>Google Pixel</h4>
									<p class="item-price"><strike>$450.00</strike> <span>$418.00</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
									<a href="#" class="btn btn-primary">Add to Cart</a>
								</div>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<img src="/examples/images/products/watch.jpg" class="img-fluid" alt="">
								</div>
								<div class="thumb-content">
									<h4>Apple Watch</h4>
									<p class="item-price"><strike>$350.00</strike> <span>$330.00</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
									<a href="#" class="btn btn-primary">Add to Cart</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Carousel controls -->
			<a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
				<i class="fa fa-angle-left"></i>
			</a>
			<a class="carousel-control-next" href="#myCarousel" data-slide="next">
				<i class="fa fa-angle-right"></i>
			</a>
		</div>
		</div>
	</div>
</div> --}}

{{-- <div class="container">
	<div class="row">
			<div class="well">
            <!-- Carousel
            ================================================== -->
            <div id="myCarousel" class="carousel slide">
                <div class="carousel-inner">
                    <div class="item active">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="thumbnail">
                                  <img src="http://placehold.it/300x200/" alt="Slide11">
                                  <div class="caption">
                                    <h3>Product label</h3>
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor</p>
                                    <p><a href="#" class="btn btn-primary" role="button">12,99 €</a> <a href="#" class="btn btn-default" role="button">Wishlist</a></p>
                                  </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="thumbnail">
                                  <img src="http://placehold.it/300x200/" alt="Slide12">
                                  <div class="caption">
                                    <h3>Product label</h3>
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor</p>
                                    <p><a href="#" class="btn btn-primary" role="button">12,99 €</a> <a href="#" class="btn btn-default" role="button">Wishlist</a></p>
                                  </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="thumbnail">
                                  <img src="http://placehold.it/300x200/" alt="Slide13">
                                  <div class="caption">
                                    <h3>Product label</h3>
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor</p>
                                    <p><a href="#" class="btn btn-primary" role="button">12,99 €</a> <a href="#" class="btn btn-default" role="button">Wishlist</a></p>
                                  </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="thumbnail">
                                  <img src="http://placehold.it/300x200/" alt="Slide14">
                                  <div class="caption">
                                    <h3>Product label</h3>
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor</p>
                                    <p><a href="#" class="btn btn-primary" role="button">12,99 €</a> <a href="#" class="btn btn-default" role="button">Wishlist</a></p>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="thumbnail">
                                  <img src="http://placehold.it/300x200/" alt="Slide21">
                                  <div class="caption">
                                    <h3>Product label</h3>
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor</p>
                                    <p><a href="#" class="btn btn-primary" role="button">12,99 €</a> <a href="#" class="btn btn-default" role="button">Wishlist</a></p>
                                  </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="thumbnail">
                                  <img src="http://placehold.it/300x200/" alt="Slide22">
                                  <div class="caption">
                                    <h3>Product label</h3>
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor</p>
                                    <p><a href="#" class="btn btn-primary" role="button">12,99 €</a> <a href="#" class="btn btn-default" role="button">Wishlist</a></p>
                                  </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="thumbnail">
                                  <img src="http://placehold.it/300x200/" alt="Slide23">
                                  <div class="caption">
                                    <h3>Product label</h3>
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor</p>
                                    <p><a href="#" class="btn btn-primary" role="button">12,99 €</a> <a href="#" class="btn btn-default" role="button">Wishlist</a></p>
                                  </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="thumbnail">
                                  <img src="http://placehold.it/300x200/" alt="Slide24">
                                  <div class="caption">
                                    <h3>Product label</h3>
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor</p>
                                    <p><a href="#" class="btn btn-primary" role="button">12,99 €</a> <a href="#" class="btn btn-default" role="button">Wishlist</a></p>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="thumbnail">
                                  <img src="http://placehold.it/300x200/" alt="Slide31">
                                  <div class="caption">
                                    <h3>Product label</h3>
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor</p>
                                    <p><a href="#" class="btn btn-primary" role="button">12,99 €</a> <a href="#" class="btn btn-default" role="button">Wishlist</a></p>
                                  </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="thumbnail">
                                  <img src="http://placehold.it/300x200/" alt="Slide32">
                                  <div class="caption">
                                    <h3>Product label</h3>
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor</p>
                                    <p><a href="#" class="btn btn-primary" role="button">12,99 €</a> <a href="#" class="btn btn-default" role="button">Wishlist</a></p>
                                  </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="thumbnail">
                                  <img src="http://placehold.it/300x200/" alt="Slide33">
                                  <div class="caption">
                                    <h3>Product label</h3>
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor</p>
                                    <p><a href="#" class="btn btn-primary" role="button">12,99 €</a> <a href="#" class="btn btn-default" role="button">Wishlist</a></p>
                                  </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="thumbnail">
                                  <img src="http://placehold.it/300x200/" alt="Slide34">
                                  <div class="caption">
                                    <h3>Product label</h3>
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor</p>
                                    <p><a href="#" class="btn btn-primary" role="button">12,99 €</a> <a href="#" class="btn btn-default" role="button">Wishlist</a></p>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="left carousel-control" href="#myCarousel" data-slide="prev"><i class="fa fa-chevron-left fa-2x"></i></a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next"><i class="fa fa-chevron-right fa-2x"></i></a>

                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
            </div><!-- End Carousel -->
        </div><!-- End Well -->
    </div>
</div> --}}



            {{-- <div class="row">
                <div class="col-md-12" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                    <div class="carousel-item">
                        @foreach ($product as $key=>$item)
                        <div class="item">
                            <div class="causes-wrap">
                                <a href="#" class="img d-flex align-items-end justify-content-center glightbox" style="background-image:url({{url('/uploads/uploads/product/'.$item->image)}}")">
                                    <div class="icon d-flex align-items-center justify-content-center"><span class=""></span></div>
                                    <a href="{{route('crisis.view', $item->id)}}"><span class="sub">{{$item->name}}</span></a>
                                </a>
                                <div class="text">
                                    <div class="desc">
                                        <h2 class="mb-3">Green Dress with detailsn</h2>

                                    </div>
                                    <div class="progress-desc">
                                        <div class="progress-wrap">
                                            <div class="progress">

                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex raised-goal justify-content-between">
                                            <span>price: <strong>{{$item->price}}</strong></span>
                                            <span>product_category: <strong>{{$item->product_category}}</strong></span>
                                            <span class="goal">description: <strong>{{$item->description}}</strong></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach --}}



            {{-- <div class="tab-content" id="nav-tabContent">

                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-product mb-60">
                                <div class="product-img">
                                    <img src="{{url('Frontend/assets/img/categori/xproduct1.png.pagespeed.ic.PSbAf6Hw8Q.png')}}" alt="">
                                    <div class="new-product">
                                        <span>New</span>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="product-ratting">
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star low-star"></i>
                                        <i class="far fa-star low-star"></i>
                                    </div>
                                    <h4><a href="#">Green Dress with details</a></h4>
                                    <div class="price">
                                        <ul>
                                            <li>$40.00</li>
                                            <li class="discount">$60.00</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-product mb-60">
                                <div class="product-img">
                                    <img src="{{url('Frontend/assets/img/categori/xproduct2.png.pagespeed.ic._r0ViwNDbD.png')}}" alt="">
                                </div>
                                <div class="product-caption">
                                    <div class="product-ratting">
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star low-star"></i>
                                        <i class="far fa-star low-star"></i>
                                    </div>
                                    <h4><a href="#">Green Dress with details</a></h4>
                                    <div class="price">
                                        <ul>
                                            <li>$40.00</li>
                                            <li class="discount">$60.00</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-product mb-60">
                                <div class="product-img">
                                    <img src="{{url('Frontend/assets/img/categori/xproduct3.png.pagespeed.ic.E1CZklrNzQ.png')}}" alt="">
                                    <div class="new-product">
                                        <span>New</span>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="product-ratting">
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star low-star"></i>
                                        <i class="far fa-star low-star"></i>
                                    </div>
                                    <h4><a href="#">Green Dress with details</a></h4>
                                    <div class="price">
                                        <ul>
                                            <li>$40.00</li>
                                            <li class="discount">$60.00</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-product mb-60">
                                <div class="product-img">
                                    <img src="{{url('Frontend/assets/img/categori/xproduct4.png.pagespeed.ic.ytxzNXkNL6.png')}}" alt="">
                                </div>
                                <div class="product-caption">
                                    <div class="product-ratting">
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star low-star"></i>
                                        <i class="far fa-star low-star"></i>
                                    </div>
                                    <h4><a href="#">Green Dress with details</a></h4>
                                    <div class="price">
                                        <ul>
                                            <li>$40.00</li>
                                            <li class="discount">$60.00</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-product mb-60">
                                <div class="product-img">
                                    <img src="{{url('Frontend/assets/img/categori/xproduct5.png.pagespeed.ic.zwCbnKL1LL.png')}}" alt="">
                                </div>
                                <div class="product-caption">
                                    <div class="product-ratting">
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star low-star"></i>
                                        <i class="far fa-star low-star"></i>
                                    </div>
                                    <h4><a href="#">Green Dress with details</a></h4>
                                    <div class="price">
                                        <ul>
                                            <li>$40.00</li>
                                            <li class="discount">$60.00</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-product mb-60">
                                <div class="product-img">
                                    <img src="{{url('Frontend/assets/img/categori/xproduct6.png.pagespeed.ic.QC1JouMLHL.png')}}" alt="">
                                    <div class="new-product">
                                        <span>New</span>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="product-ratting">
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star low-star"></i>
                                        <i class="far fa-star low-star"></i>
                                    </div>
                                    <h4><a href="#">Green Dress with details</a></h4>
                                    <div class="price">
                                        <ul>
                                            <li>$40.00</li>
                                            <li class="discount">$60.00</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-product mb-60">
                                <div class="product-img">
                                    <img src="{{url('Frontend/assets/img/categori/xproduct4.png.pagespeed.ic.ytxzNXkNL6.png')}}" alt="">
                                </div>
                                <div class="product-caption">
                                    <div class="product-ratting">
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star low-star"></i>
                                        <i class="far fa-star low-star"></i>
                                    </div>
                                    <h4><a href="#">Green Dress with details</a></h4>
                                    <div class="price">
                                        <ul>
                                            <li>$40.00</li>
                                            <li class="discount">$60.00</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-product mb-60">
                                <div class="product-img">
                                    <img src="{{url('Frontend/assets/img/categori/xproduct5.png.pagespeed.ic.zwCbnKL1LL.png')}}" alt="">
                                </div>
                                <div class="product-caption">
                                    <div class="product-ratting">
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star low-star"></i>
                                        <i class="far fa-star low-star"></i>
                                    </div>
                                    <h4><a href="#">Green Dress with details</a></h4>
                                    <div class="price">
                                        <ul>
                                            <li>$40.00</li>
                                            <li class="discount">$60.00</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-product mb-60">
                                <div class="product-img">
                                    <img src="{{url('Frontend/assets/img/categori/xproduct6.png.pagespeed.ic.QC1JouMLHL.png')}}" alt="">
                                    <div class="new-product">
                                        <span>New</span>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="product-ratting">
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star low-star"></i>
                                        <i class="far fa-star low-star"></i>
                                    </div>
                                    <h4><a href="#">Green Dress with details</a></h4>
                                    <div class="price">
                                        <ul>
                                            <li>$40.00</li>
                                            <li class="discount">$60.00</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-product mb-60">
                                <div class="product-img">
                                    <img src="{{url('Frontend/assets/img/categori/xproduct2.png.pagespeed.ic._r0ViwNDbD.png')}}" alt="">
                                </div>
                                <div class="product-caption">
                                    <div class="product-ratting">
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star low-star"></i>
                                        <i class="far fa-star low-star"></i>
                                    </div>
                                    <h4><a href="#">Green Dress with details</a></h4>
                                    <div class="price">
                                        <ul>
                                            <li>$40.00</li>
                                            <li class="discount">$60.00</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-product mb-60">
                                <div class="product-img">
                                    <img src="{{url('Frontend/assets/img/categori/xproduct3.png.pagespeed.ic.E1CZklrNzQ.png')}}" alt="">
                                    <div class="new-product">
                                        <span>New</span>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="product-ratting">
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star low-star"></i>
                                        <i class="far fa-star low-star"></i>
                                    </div>
                                    <h4><a href="#">Green Dress with details</a></h4>
                                    <div class="price">
                                        <ul>
                                            <li>$40.00</li>
                                            <li class="discount">$60.00</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-product mb-60">
                                <div class="product-img">
                                    <img src="{{url('Frontend/assets/img/categori/xproduct1.png.pagespeed.ic.PSbAf6Hw8Q.png')}}" alt="">
                                    <div class="new-product">
                                        <span>New</span>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="product-ratting">
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star low-star"></i>
                                        <i class="far fa-star low-star"></i>
                                    </div>
                                    <h4><a href="#">Green Dress with details</a></h4>
                                    <div class="price">
                                        <ul>
                                            <li>$40.00</li>
                                            <li class="discount">$60.00</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-product mb-60">
                                <div class="product-img">
                                    <img src="{{url('Frontend/assets/img/categori/xproduct2.png.pagespeed.ic._r0ViwNDbD.png')}}" alt="">
                                </div>
                                <div class="product-caption">
                                    <div class="product-ratting">
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star low-star"></i>
                                        <i class="far fa-star low-star"></i>
                                    </div>
                                    <h4><a href="#">Green Dress with details</a></h4>
                                    <div class="price">
                                        <ul>
                                            <li>$40.00</li>
                                            <li class="discount">$60.00</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-product mb-60">
                                <div class="product-img">
                                    <img src="{{url('Frontend/assets/img/categori/xproduct3.png.pagespeed.ic.E1CZklrNzQ.png')}}" alt="">
                                    <div class="new-product">
                                        <span>New</span>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="product-ratting">
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star low-star"></i>
                                        <i class="far fa-star low-star"></i>
                                    </div>
                                    <h4><a href="#">Green Dress with details</a></h4>
                                    <div class="price">
                                        <ul>
                                            <li>$40.00</li>
                                            <li class="discount">$60.00</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-product mb-60">
                                <div class="product-img">
                                    <img src="{{url('Frontend/assets/img/categori/xproduct1.png.pagespeed.ic.PSbAf6Hw8Q.png')}}" alt="">
                                    <div class="new-product">
                                        <span>New</span>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="product-ratting">
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star low-star"></i>
                                        <i class="far fa-star low-star"></i>
                                    </div>
                                    <h4><a href="#">Green Dress with details</a></h4>
                                    <div class="price">
                                        <ul>
                                            <li>$40.00</li>
                                            <li class="discount">$60.00</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-product mb-60">
                                <div class="product-img">
                                    <img src="{{url('Frontend/assets/img/categori/xproduct4.png.pagespeed.ic.ytxzNXkNL6.png')}}" alt="">
                                </div>
                                <div class="product-caption">
                                    <div class="product-ratting">
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star low-star"></i>
                                        <i class="far fa-star low-star"></i>
                                    </div>
                                    <h4><a href="#">Green Dress with details</a></h4>
                                    <div class="price">
                                        <ul>
                                            <li>$40.00</li>
                                            <li class="discount">$60.00</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-product mb-60">
                                <div class="product-img">
                                    <img src="{{url('Frontend/assets/img/categori/xproduct6.png.pagespeed.ic.QC1JouMLHL.png')}}" alt="">
                                    <div class="new-product">
                                        <span>New</span>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="product-ratting">
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star low-star"></i>
                                        <i class="far fa-star low-star"></i>
                                    </div>
                                    <h4><a href="#">Green Dress with details</a></h4>
                                    <div class="price">
                                        <ul>
                                            <li>$40.00</li>
                                            <li class="discount">$60.00</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-product mb-60">
                                <div class="product-img">
                                    <img src="{{url('Frontend/assets/img/categori/xproduct5.png.pagespeed.ic.zwCbnKL1LL.png')}}" alt="">
                                </div>
                                <div class="product-caption">
                                    <div class="product-ratting">
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star low-star"></i>
                                        <i class="far fa-star low-star"></i>
                                    </div>
                                    <h4><a href="#">Green Dress with details</a></h4>
                                    <div class="price">
                                        <ul>
                                            <li>$40.00</li>
                                            <li class="discount">$60.00</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="nav-last" role="tabpanel" aria-labelledby="nav-last-tab">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-product mb-60">
                                <div class="product-img">
                                    <img src="{{url('Frontend/assets/img/categori/xproduct1.png.pagespeed.ic.PSbAf6Hw8Q.png')}}" alt="">
                                    <div class="new-product">
                                        <span>New</span>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="product-ratting">
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star low-star"></i>
                                        <i class="far fa-star low-star"></i>
                                    </div>
                                    <h4><a href="#">Green Dress with details</a></h4>
                                    <div class="price">
                                        <ul>
                                            <li>$40.00</li>
                                            <li class="discount">$60.00</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-product mb-60">
                                <div class="product-img">
                                    <img src="{{url('Frontend/assets/img/categori/xproduct2.png.pagespeed.ic._r0ViwNDbD.png')}}" alt="">
                                </div>
                                <div class="product-caption">
                                    <div class="product-ratting">
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star low-star"></i>
                                        <i class="far fa-star low-star"></i>
                                    </div>
                                    <h4><a href="#">Green Dress with details</a></h4>
                                    <div class="price">
                                        <ul>
                                            <li>$40.00</li>
                                            <li class="discount">$60.00</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-product mb-60">
                                <div class="product-img">
                                    <img src="{{url('Frontend/assets/img/categori/xproduct3.png.pagespeed.ic.E1CZklrNzQ.png')}}" alt="">
                                    <div class="new-product">
                                        <span>New</span>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="product-ratting">
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star low-star"></i>
                                        <i class="far fa-star low-star"></i>
                                    </div>
                                    <h4><a href="#">Green Dress with details</a></h4>
                                    <div class="price">
                                        <ul>
                                            <li>$40.00</li>
                                            <li class="discount">$60.00</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-product mb-60">
                                <div class="product-img">
                                    <img src="{{url('Frontend/assets/img/categori/xproduct4.png.pagespeed.ic.ytxzNXkNL6.png')}}" alt="">
                                </div>
                                <div class="product-caption">
                                    <div class="product-ratting">
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star low-star"></i>
                                        <i class="far fa-star low-star"></i>
                                    </div>
                                    <h4><a href="#">Green Dress with details</a></h4>
                                    <div class="price">
                                        <ul>
                                            <li>$40.00</li>
                                            <li class="discount">$60.00</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-product mb-60">
                                <div class="product-img">
                                    <img src="{{url('Frontend/assets/img/categori/xproduct5.png.pagespeed.ic.zwCbnKL1LL.png')}}" alt="">
                                </div>
                                <div class="product-caption">
                                    <div class="product-ratting">
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star low-star"></i>
                                        <i class="far fa-star low-star"></i>
                                    </div>
                                    <h4><a href="#">Green Dress with details</a></h4>
                                    <div class="price">
                                        <ul>
                                            <li>$40.00</li>
                                            <li class="discount">$60.00</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="single-product mb-60">
                                <div class="product-img">
                                    <img src="{{url('Frontend/assets/img/categori/xproduct6.png.pagespeed.ic.QC1JouMLHL.png')}}" alt="">
                                    <div class="new-product">
                                        <span>New</span>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <div class="product-ratting">
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star low-star"></i>
                                        <i class="far fa-star low-star"></i>
                                    </div>
                                    <h4><a href="#">Green Dress with details</a></h4>
                                    <div class="price">
                                        <ul>
                                            <li>$40.00</li>
                                            <li class="discount">$60.00</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div> --}}
    </section>


    <div class="best-product-area lf-padding">
        <div class="product-wrapper bg-height" style="background-image:url(assets/img/categori/xcard.png.pagespeed.ic.CivUEvexnp.png)">
            <div class="container position-relative">
                <div class="row justify-content-between align-items-end">
                    <div class="product-man position-absolute  d-none d-lg-block">
                        <img src="{{url('Frontend/assets/img/categori/xcard-man.png.pagespeed.ic.I8AkBrIUx1.png')}}" alt="">
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-2 d-none d-lg-block">
                        <div class="vertical-text">
                            <span>Manz</span>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8">
                        <div class="best-product-caption">
                            <h2>Find The Best Product<br> from Our Shop</h2>
                            <p>Designers who are interesten creating state ofthe.</p>
                            <a href="#" class="black-btn">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="shape bounce-animate d-none d-md-block">
            <img src="{{url('Frontend/assets/img/categori/xcard-shape.png.pagespeed.ic.Twejp73NDn.png')}}" alt="">
        </div>
    </div>


    <div class="best-collection-area section-padding2">
        <div class="container">
            <div class="row d-flex justify-content-between align-items-end">

                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="best-left-cap">
                        <h2>Best Collection of This Month</h2>
                        <p>Designers who are interesten crea.</p>
                        <a href="#" class="btn shop1-btn">Shop Now</a>
                    </div>
                    <div class="best-left-img mb-30 d-none d-sm-block">
                        <img src="{{url('assets/img/collection/xcollection1.png.pagespeed.ic.R9PkaClwo4.png')}}" alt="">
                    </div>
                </div>

                <div class="col-xl-2 col-lg-2 d-none d-lg-block">
                    <div class="best-mid-img mb-30 ">
                        <img src="{{url('Frontend/assets/img/collection/xcollection2.png.pagespeed.ic.swWaz_CJ39.png')}}" alt="">
                    </div>
                </div>

                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="best-right-cap ">
                        <div class="best-single mb-30">
                            <div class="single-cap">
                                <h4>Menz Winter<br> Jacket</h4>
                            </div>
                            <div class="single-img">
                                <img src="{{url('Frontend/assets/img/collection/xcollection3.png.pagespeed.ic.QZsmjYH2Hc.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="best-right-cap">
                        <div class="best-single mb-30">
                            <div class="single-cap active">
                                <h4>Menz Winter<br>Jacket</h4>
                            </div>
                            <div class="single-img">
                                <img src="{{url('Frontend/assets/img/collection/xcollection4.png.pagespeed.ic.CKU4U94NmU.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="best-right-cap">
                        <div class="best-single mb-30">
                            <div class="single-cap">
                                <h4>Menz Winter<br> Jacket</h4>
                            </div>
                            <div class="single-img">
                                <img src="{{url('Frontend/assets/img/collection/xcollection5.png.pagespeed.ic.ESfQKcs6vJ.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="latest-wrapper lf-padding">
        <div class="latest-area latest-height d-flex align-items-center" data-background="assets/img/collection/latest-offer.png">
            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-xl-5 col-lg-5 col-md-6 offset-xl-1 offset-lg-1">
                        <div class="latest-caption">
                            <h2>Get Our<br>Latest Offers News</h2>
                            <p>Subscribe news latter</p>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5 col-md-6 ">
                        <div class="latest-subscribe">
                            <form action="#">
                                <input type="email" placeholder="Your email here">
                                <button>Shop Now</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="man-shape">
                <img src="{{url('Frontend/assets/img/collection/xlatest-man.png.pagespeed.ic.2acRHHPJA-.png')}}" alt="">
            </div>
        </div>
    </div>


    <div class="shop-method-area section-padding30">
        <div class="container">
            <div class="row d-flex justify-content-between">
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="single-method mb-40">
                        <i class="ti-package"></i>
                        <h6>Free Shipping Method</h6>
                        <p>aorem ixpsacdolor sit ameasecur adipisicing elitsf edasd.</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="single-method mb-40">
                        <i class="ti-unlock"></i>
                        <h6>Secure Payment System</h6>
                        <p>aorem ixpsacdolor sit ameasecur adipisicing elitsf edasd.</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6">
                    <div class="single-method mb-40">
                        <i class="ti-reload"></i>
                        <h6>Secure Payment System</h6>
                        <p>aorem ixpsacdolor sit ameasecur adipisicing elitsf edasd.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="gallery-wrapper lf-padding">
        <div class="gallery-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="gallery-items">
                        <img src="{{url('Frontend/assets/img/gallery/xgallery1.jpg.pagespeed.ic.vLqzDjhJUZ.jpg')}}" alt="">
                    </div>
                    <div class="gallery-items">
                        <img src="{{url('Frontend/assets/img/gallery/xgallery2.jpg.pagespeed.ic.L2xM7uh2Xk.jpg')}}" alt="">
                    </div>
                    <div class="gallery-items">
                        <img src="{{url('Frontend/assets/img/gallery/xgallery3.jpg.pagespeed.ic.mB-kgLdr08.jpg')}}" alt="">
                    </div>
                    <div class="gallery-items">
                        <img src="{{url('Frontend/assets/img/gallery/xgallery4.jpg.pagespeed.ic.QOWWARNbVe.jpg')}}" alt="">
                    </div>
                    <div class="gallery-items">
                        <img src="{{url('Frontend/assets/img/gallery/xgallery5.jpg.pagespeed.ic.i5qoUrRGe1.jpg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<script>
    $('.product-carousel').slick({
		lazyLoad: 'ondemand',
		slidesToShow: 4,
		slidesToScroll: 1,
		nextArrow: '<i class="arrow right">',
		prevArrow: '<i class="arrow left">',
		infinite: true,
		responsive: [
			{
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
