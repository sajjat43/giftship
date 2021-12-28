<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>eCommerce HTML-5 Template </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.html">
        <link rel="shortcut icon" type="image/x-icon" href="{{url('Frontend/assets/img/favicon.ico')}}">

        <link rel="stylesheet" href="{{url('Frontend/assets/css/bootstrap.min.css%2bowl.carousel.min.css%2bflaticon.css%2bslicknav.css%2banimate.min.css%2bmagnific-popup.css%2bfontawesome-all.min.css%2bthemify-icons.css%2bslick.css')}}" />
        <link rel="stylesheet" href="{{url('Frontend/assets/css/A.style.css.pagespeed.cf.LmhYJqu-1k.css')}}">
        <script>(function(w,d){!function(e,t,r,a,s){e[r]=e[r]||{},e[r].executed=[],e.zaraz={deferred:[]};var n=t.getElementsByTagName("title")[0];e[r].c=t.cookie,n&&(e[r].t=t.getElementsByTagName("title")[0].text),e[r].w=e.screen.width,e[r].h=e.screen.height,e[r].j=e.innerHeight,e[r].e=e.innerWidth,e[r].l=e.location.href,e[r].r=t.referrer,e[r].k=e.screen.colorDepth,e[r].n=t.characterSet,e[r].o=(new Date).getTimezoneOffset(),//
            e[s]=e[s]||[],e.zaraz._preTrack=[],e.zaraz.track=(t,r)=>e.zaraz._preTrack.push([t,r]),e[s].push({"zaraz.start":(new Date).getTime()});var i=t.getElementsByTagName(a)[0],o=t.createElement(a);o.defer=!0,o.src="../../cdn-cgi/zaraz/sd41d.js?"+new URLSearchParams(e[r]).toString(),i.parentNode.insertBefore(o,i)}(w,d,"zarazData","script","dataLayer");})(window,document);</script></head>
            <body>
                <div id="preloader-active">
                    <div class="preloader d-flex align-items-center justify-content-center">
                        <div class="preloader-inner position-relative">
                            <div class="preloader-circle"></div>
                            <div class="preloader-img pere-text">
                                <img src="{{url('Frontend/assets/img/logo/xlogo.png.pagespeed.ic.sGRea8mlua.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div
                {{-- header goes here --}}
                @include('website.fixed.header')

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
                            <div class="col-xl-4 col-lg-6">
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
                            </div>
                            <div class="col-xl-4 col-lg-6">
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
                            </div>
                            <div class="col-xl-4 col-lg-6">
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
                            </div>
                        </div>
                    </div>
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

                        <div class="tab-content" id="nav-tabContent">

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

                    </div>
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

            <footer>
                <div class="footer-area footer-padding">
                    <div class="container">
                        <div class="row d-flex justify-content-between">
                            <div class="col-xl-3 col-lg-3 col-md-5 col-sm-6">
                                <div class="single-footer-caption mb-50">
                                    <div class="single-footer-caption mb-30">

                                        <div class="footer-logo">
                                            <a href="index-2.html"><img src="{{url('Frontend/assets/img/logo/xlogo2_footer.png.pagespeed.ic.sGRea8mlua.pn')}}g" alt=""></a>
                                        </div>
                                        <div class="footer-tittle">
                                            <div class="footer-pera">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-3 col-sm-5">
                                <div class="single-footer-caption mb-50">
                                    <div class="footer-tittle">
                                        <h4>Quick Links</h4>
                                        <ul>
                                            <li><a href="#">About</a></li>
                                            <li><a href="#"> Offers & Discounts</a></li>
                                            <li><a href="#"> Get Coupon</a></li>
                                            <li><a href="#"> Contact Us</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-7">
                                <div class="single-footer-caption mb-50">
                                    <div class="footer-tittle">
                                        <h4>New Products</h4>
                                        <ul>
                                            <li><a href="#">Woman Cloth</a></li>
                                            <li><a href="#">Fashion Accessories</a></li>
                                            <li><a href="#"> Man Accessories</a></li>
                                            <li><a href="#"> Rubber made Toys</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-5 col-sm-7">
                                <div class="single-footer-caption mb-50">
                                    <div class="footer-tittle">
                                        <h4>Support</h4>
                                        <ul>
                                            <li><a href="#">Frequently Asked Questions</a></li>
                                            <li><a href="#">Terms & Conditions</a></li>
                                            <li><a href="#">Privacy Policy</a></li>
                                            <li><a href="#">Privacy Policy</a></li>
                                            <li><a href="#">Report a Payment Issue</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- <div class="row">
                            <div class="col-xl-7 col-lg-7 col-md-7">
                                <div class="footer-copy-right">
                                    <p>
                                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com/" target="_blank">Colorlib</a>
                                    </p> </div>
                                </div>
                                <div class="col-xl-5 col-lg-5 col-md-5">
                                    <div class="footer-copy-right f-right">

                                        <div class="footer-social">
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                            <a href="#"><i class="fab fa-behance"></i></a>
                                            <a href="#"><i class="fas fa-globe"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>

                </footer>




                <script src="{{url('Frontend/assets/js/vendor/modernizr-3.5.0.min.js')}}"></script>

                <script src="{{url('Frontend/assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
                <script src="{{url('Frontend/assets/js/popper.min.js%2bbootstrap.min.js%2bjquery.slicknav.min.js.pagespeed.jc.tZyD-FwHec.js')}}"></script><script>eval(mod_pagespeed_uLS_3jiC9P);</script>
                <script>eval(mod_pagespeed_dEXX7W4Qj$);</script>

                <script>eval(mod_pagespeed_fKzsIdr7CL);</script>

                <script src="{{url('Frontend/assets/js/owl.carousel.min.js%2bslick.min.js%2bwow.min.js%2banimated.headline.js.pagespeed.jc.wJ9RpF0nwF.js')}}"></script><script>eval(mod_pagespeed_t4vdyadhrM);</script>
                <script>eval(mod_pagespeed_ZPIuHAdCMa);</script>

                <script>eval(mod_pagespeed_PbZmGjTJEF);</script>
                <script>eval(mod_pagespeed_QSDhf3cFEK);</script>
                <script src="{{url('Frontend/assets/js/jquery.magnific-popup.js%2bjquery.scrollUp.min.js%2bjquery.nice-select.min.js%2bjquery.sticky.js%2bcontact.js%2bjquery.form.js.pagespeed.jc.lAaetcuKu4.js')}}"></script><script>eval(mod_pagespeed_nqEp4ru0AF);</script>

                <script>eval(mod_pagespeed_UIGkZC$1YI);</script>
                <script>eval(mod_pagespeed_1koFnvWiqU);</script>
                <script>eval(mod_pagespeed_bh4Mt9M5Vq);</script>

                <script>eval(mod_pagespeed_qCWqHbhHjW);</script>
                <script>eval(mod_pagespeed_sO9pJ8Us7_);</script>
                <script src="{{url('Frontend/assets/js/jquery.validate.min.js%2bmail-script.js%2bjquery.ajaxchimp.min.js%2bplugins.js%2bmain.js.pagespeed.jc.X9c6Ii-Aij.js')}}"></script><script>eval(mod_pagespeed_xR93SgUb3P);</script>
                <script>eval(mod_pagespeed_IwRW_1hrVc);</script>
                <script>eval(mod_pagespeed_85KMyGu8r8);</script>

                <script>eval(mod_pagespeed_gpcplEHVUP);</script>
                <script>eval(mod_pagespeed_XKQAPPGbRm);</script>

                <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
                <script>
                    window.dataLayer = window.dataLayer || [];
                    function gtag(){dataLayer.push(arguments);}
                    gtag('js', new Date());

                    gtag('config', 'UA-23581568-13');
                </script>
                <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"6c488e9a3f32e9a7","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.12.0","si":100}' crossorigin="anonymous"></script>
            </body>

            <!-- Mirrored from preview.colorlib.com/theme/estore/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Dec 2021 05:59:04 GMT -->
            </html>
