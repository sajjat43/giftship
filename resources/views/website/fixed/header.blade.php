<header>

    <div class="header-area">
        <div class="main-header ">
            <div class="header-top top-bg d-none d-lg-block">
                <div class="container-fluid">
                    <div class="col-xl-12">
                        <div class="row d-flex justify-content-between align-items-center">
                            <div class="header-info-left d-flex">
                                <div class="flag">
                                    <img src="{{url('Frontend/assets/img/icon/Flag-of-Bangladesh-500x300.png')}}" alt="">
                                </div>
                                <div class="select-this">
                                    <form action="#">
                                        <div class="select-itms">
                                            <select name="select" id="select1">
                                                <option value="">Bangladesh</option>
                                                <option value="">USA</option>
                                                <option value="">India</option>
                                                <option value="">USD</option>
                                            </select>
                                        </div>
                                    </form>
                                </div>
                                <ul class="contact-now">
                                    <li>0187000000</li>
                                </ul>
                            </div>
                            <div class="header-info-right">
                                <ul>
                                    <li><a href="{{route('Employee.login')}}">My Account </a></li>
                                    <li><a href="product_list.html">Wish List </a></li>
                                    <li><a href="cart.html">Shopping</a></li>
                                    <li><a href="cart.html">Cart</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom  header-sticky">
                <div class="container-fluid">
                    <div class="row align-items-center">

                        <div class="col-xl-1 col-lg-1 col-md-1 col-sm-3">
                            <div class="logo">
                                <a href="#"><img src="{{url('Frontend/assets/img/logo/logo_102x23.jpeg')}}" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-8 col-md-7 col-sm-5">

                            <div class="main-menu f-right d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="{{route('manage.home')}}">Home</a></li>
                                        <li><a href="Catagori.html">Catagori</a></li>
                                        <li class="hot"><a href="#">Latest</a>
                                            <ul class="submenu">
                                                <li><a href="{{route('product.font.view')}}"> Product list</a></li>
                                                <li><a href="single-product.html"> Product Details</a></li>
                                            </ul>
                                        </li>
                                        {{-- ====================category===================== --}}
                                        <li><a href="blog.html">Category</a>
                                            <ul class="submenu">
                                                @foreach ($categories as $category )
                                                <li><a href="">{{$category->Cname}}</a></li>
                                                @endforeach


                                            </ul>
                                        </li>
                                        <li><a href="#">Pages</a>
                                            <ul class="submenu">
                                                <li><a href="">Login</a></li>
                                                <li><a href="">Card</a></li>
                                                <li><a href="elements.html">Element</a></li>
                                                <li><a href="about.html">About</a></li>
                                                <li><a href="confirmation.html">Confirmation</a></li>
                                                <li><a href="">Shopping Cart</a></li>
                                                <li><a href="checkout.html">Product Checkout</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-3 col-md-3 col-sm-3 fix-card">
                            <ul class="header-right f-right d-none d-lg-block d-flex justify-content-between">
                                <li class="d-none d-xl-block">
                                    <div class="form-box f-right ">
                                        <input type="text" name="Search" placeholder="Search products">
                                        <div class="search-icon">
                                            <i class="fas fa-search special-tag"></i>
                                        </div>
                                    </div>
                                </li>
                                <li class=" d-none d-xl-block">
                                    <div class="favorit-items">
                                        <i class="far fa-heart"></i>
                                    </div>
                                </li>
                                <li>
                                    <div class="shopping-card">
                                        <a href="{{route('cart.view')}}"><i class="fas fa-shopping-cart"></i></a>
                                    </div>
                                </li>
                                <li class="d-none d-lg-block"> <a href="{{route('website.user.login')}}" class="btn header-btn">Sign in</a></li>
                            </ul>
                        </div>

                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
