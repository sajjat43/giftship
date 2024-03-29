<header>
    <div class="header-area">
        <div class="main-header ">
            <div class="header-top top-bg d-none d-lg-block">
                <div class="container-fluid">
                    <div class="col-xl-12">
                        <div class="d-flex justify-content-between align-items-center">
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



                            </div>
                            <div class="header-info-right">
                                <ul>
                                    <li><a href="{{ route('customer.profile') }}">My
                                            Account </a>
                                    </li>
                                   
                                    @if (!auth()->user())

                                    @else
                                    <li><a href="{{route('order.customer')}}">order
                                            list</a></li>

                                    @endif
                                    @if (!auth()->user())
                                    <li><a href="{{ route('website.user.login') }}">Sign in</a></li>
                                    @else
                                    @if(Auth()->user()->role == 'admin')
                                    <li><a href="{{route('home')}}">Dashbord</a></li>
                                    @endif
                                    <li><a href="{{ route('user.logout') }}">({{ auth()->user()->name }})/Sign
                                            out</a></li>
                                    @endif
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
                                <a href="{{ route('manage.home') }}"><img
                                        src="{{ url('Frontend/assets/img/logo/logo_102x23.jpeg') }}" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-8 col-md-7 col-sm-5">

                            <div class="main-menu f-right d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="{{ route('manage.home') }}">Home</a></li>
                                        <li><a href="{{ route('all.product') }}">All Product</a></li>
                                        {{-- ====================category===================== --}}


                                        <li><a href="">Category</a>
                                            <ul class="submenu">
                                                @foreach ($categories as $category)
                                                {{-- @dd($categories); --}}
                                                <li>
                                                    <a href="{{ route('product.under.catagory', $category->id) }}">{{
                                                        $category->Cname }}</a>
                        
                                                </li>
                                                
                                                @endforeach
                                            </ul>
                                        </li>
                                        {{-- subcategory --}}
                                        <li class=""><a href="#">SubCategory</a>
                                            <ul class="submenu">
                                                @foreach ( $subcategorys as $subcategory)
                                                <li><a href="{{route('product.under.subcategory',$subcategory->id)}}"> {{$subcategory->subname}}</a>
                                                </li>
                                                @endforeach
                                                
                                                
                                            </ul>
                                        </li>
                                        {{-- brand --}}
                                        <li><a href="">Brand</a>
                                            <ul class="submenu">

                                                @foreach ($brand as $brand)
                                                <li><a href="{{ route('product.under.brand', $brand->id) }}">{{
                                                        $brand->Bname }}</a>
                                                </li>
                                                @endforeach
                                            </ul>
                                        </li>
                                        <li><a href="#">Pages</a>
                                            <ul class="submenu">
                                                <li><a href="{{ route('website.user.login') }}">Login</a></li>
                                              
                                                <li><a href="{{ route('featured.product') }}">Featured</a></li>
                                                <li><a href="">About</a></li>
                                                
                                                <li><a href="{{ route('cart.view') }}">Shopping Cart</a></li>
                                               
                                            </ul>
                                        </li>
                                        <li><a href="">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <style>
                            .search-icon button {
                                border: transparent;
                                background-color: #eee;

                            }
                        </style>

                        <div class="col-xl-5 col-lg-3 col-md-3 col-sm-3 fix-card">
                            <ul class="header-right f-right d-none d-lg-block d-flex justify-content-between">
                                <form action="{{ route('product.search.view') }}" method="GET">

                                    <li class="d-none d-xl-block">
                                        <div class="form-box f-right ">
                                            <input class="srch" type="text" name="search" placeholder="Search products">
                                            <div class="search-icon">
                                                <button type="submit">
                                                    <i class=" fas fa-search special-tag"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </li>
                                </form>
                                <li class=" d-none d-xl-block">
                                    <div class="favorit-items">
                                        <a href="{{ route('wishlist.view') }}"><i
                                                class="far fa-heart">{{session()->has('wishlist') ?
                                                count(session()->get('wishlist')) : 0 }}</i></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="shopping-card">
                                        <a href="{{ route('cart.view') }}"><i class="fas fa-shopping-cart ">
                                                {{ session()->has('cart') ? count(session()->get('cart')) : 0 }}
                                            </i></a>
                                    </div>

                                </li>

                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>