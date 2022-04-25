<header>
    <div class="header-area">
        <div class="main-header ">
            <div class="header-top top-bg d-none d-lg-block">
                <div class="container-fluid">
                    <div class="col-xl-12">
                        <div class="row d-flex justify-content-between align-items-center">
                            <div class="header-info-left d-flex">
                                <div class="flag">
                                    <img src="{{ url('Frontend/assets/img/icon/Flag-of-Bangladesh-500x300.png') }}"
                                        alt="">
                                </div>
                                <div class="select-this">
                                    <form action="#">
                                        <div class="select-itms">
                                            <select name="select" id="select1">
                                                <option value="">Bangladesh</option>

                                            </select>
                                        </div>
                                    </form>
                                </div>
                                <ul class="contact-now">
                                    <li>0187000000</li>
                                </ul>


                                <div class="header-info-right ">
                                    <ul>
                                        <li><a href="{{ route('customer.profile') }}">My
                                                Account </a>
                                        </li>
                                        <li><a href="product_list.html">Wish List </a></li>
                                        <li><a href="">Shopping</a>
                                        </li>
                                        @if (!auth()->user())
                                            <li><a href="{{ route('website.user.login') }}">Sign in</a></li>
                                        @else
                                            <li><a href="{{ route('user.logout') }}">({{ auth()->user()->name }})/Sign
                                                    out</a></li>
                                        @endif
                                    </ul>
                                </div>
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
                                <a href="{{ route('manage.home') }}"><img
                                        src="{{ url('Frontend/assets/img/logo/logo_102x23.jpeg') }}" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-8 col-md-7 col-sm-5">

                            <div class="main-menu f-right d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="{{ route('manage.home') }}">Home</a></li>

                                        <li class="hot"><a href="#">Latest</a>
                                            <ul class="submenu">
                                                {{-- <li><a href="{{route('product.font.view')}}"> Product list</a>
                                        </li> --}}
                                                {{-- <li><a href="single-product.html"> Product Details</a></li> --}}
                                            </ul>
                                        </li>



                                        {{-- ====================category===================== --}}


                                        <li><a href="">Category</a>
                                            <ul class="submenu">
                                                @foreach ($categories as $category)
                                                    {{-- @dd($categories); --}}
                                                    <li>
                                                        <a
                                                            href="{{ route('product.under.catagory', $category->id) }}">{{ $category->Cname }}</a>
                                                    </li>
                                                @endforeach


                                            </ul>
                                        <li><a href="">Brand</a>
                                            <ul class="submenu">

                                                @foreach ($brand as $brand)
                                                    <li><a
                                                            href="{{ route('product.under.brand', $brand->id) }}">{{ $brand->Bname }}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </li>
                                        <li><a href="#">Pages</a>
                                            <ul class="submenu">
                                                <li><a href="{{ route('website.user.login') }}">Login</a></li>
                                                <li><a href="">Card</a></li>
                                                <li><a href="{{ route('featured.product') }}">Featured</a></li>
                                                <li><a href="about.html">About</a></li>
                                                <li><a href="confirmation.html">Confirmation</a></li>
                                                <li><a href="">Shopping Cart</a></li>
                                                <li><a href="">Product Checkout</a></li>
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
                                        <a href="{{ route('cart.view') }}"><i class="fas fa-shopping-cart ">
                                                {{ session()->has('cart') ? count(session()->get('cart')) : 0 }}
                                            </i></a>
                                    </div>

                                </li>

                                {{-- @if (auth()->user()->role == 'user') --}}
                                {{-- @if (!auth()->user())
                                                <li class="d-none d-lg-block"> <a href="{{ route('website.user.login') }}"
                                class="btn header-btn">Sign in</a></li>
                                @else
                                <li class="d-none d-lg-block"> <a href="{{ route('user.logout') }}"
                                        class="btn header-btn">{{ auth()->user()->name }}/Sign out</a></li>
                                @endif --}}

                                {{-- @endif --}}
                            </ul>
                        </div>
                        {{-- cart count  ----------------------------- --}}
                        {{-- <style>
                        .header-bottom .header-right .shopping-card {
                            position: relative
                        }

                        .header-bottom .header-right .shopping-card::before {
                            position: absolute;
                            content: "{{ session()->has('cart') ? count(session()->get('cart')) : 0 }}";
                            width: 25px;
                            height: 25px;
                            background: #00b1ff;
                            color: #fff;
                            line-height: 25px;
                            text-align: center;
                            border-radius: 30px;
                            font-size: 12px;
                            top: 0;
                            right: -6px;
                            -webkit-transition: all .2s ease-out 0s;
                            -moz-transition: all .2s ease-out 0s;
                            -ms-transition: all .2s ease-out 0s;
                            -o-transition: all .2s ease-out 0s;
                            transition: all .2s ease-out 0s;
                            box-shadow: 0 2px 5px rgba(0, 0, 0, .3)
                        }

                        .header-bottom .header-right .shopping-card i {
                            width: 50px;
                            height: 50px;
                            line-height: 50px;
                            text-align: center;
                            border-radius: 50%;
                            border: 1px solid #eee;
                            color: #4e4e4e;
                            font-size: 14px;
                            cursor: pointer
                        }

                        @media (max-width:767px) {
                            .header-bottom .fix-card {
                                position: absolute;
                                top: 12px;
                                right: 85px
                            }
                        }

                    </style> --}}

                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
