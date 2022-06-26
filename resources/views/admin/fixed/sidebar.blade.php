<style>
    .nav-link {

        color: antiquewhite !important;
    }

    .nav-link:hover {
        color: rgb(95, 254, 71) !important;



    }

    .customer {
        background-color: rgb(255, 174, 0);
        padding: 8px;
        border-radius: 7px;
        color: black;
    }
</style>
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="user-profile">
        <div class="user-image">
            <img src="{{ url('Backend/images/faces/face29.png') }}">
        </div>
        <div class="user-name">
            Sajjat Hossain
        </div>
        <div class="user-designation">
            Site Admin
        </div>
    </div>
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard.view') }}">
                <i class="icon-box menu-icon"></i>
                <span class="menu-title">Dashboard</span>
                <ul class="nav flex-column sub-menu">

        </li>
    </ul>
    </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#ui-product" aria-expanded="false" aria-controls="ui-basic">
            <i class="icon-disc menu-icon"></i>
            <span class="menu-title">Product</span>
            <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-product">
            <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('product.create') }}">Create
                        Product</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('product.view') }}">Product
                        List</a></li>
            </ul>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#ui-category" aria-expanded="false" aria-controls="ui-basic">
            <i class="icon-disc menu-icon"></i>
            <span class="menu-title">category</span>
            <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-category">
            <ul class="nav flex-column sub-menu">

                <li class="nav-item"> <a class="nav-link" href="{{ route('product.category') }}">Create
                        Category</a></li>

                <li class="nav-item"> <a class="nav-link" href="{{ route('product.category.view') }}">Category view</a>
                </li>

            </ul>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#ui-brand" aria-expanded="false" aria-controls="ui-basic">
            <i class="icon-disc menu-icon"></i>
            <span class="menu-title">Brand</span>
            <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-brand">
            <ul class="nav flex-column sub-menu">

                <li class="nav-item"> <a class="nav-link" href="{{ route('brand.create') }}">Create
                        Brand</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('brand.view') }}">Brand
                        view</a></li>

            </ul>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#ui-subCategory" aria-expanded="false"
            aria-controls="ui-basic">
            <i class="icon-disc menu-icon"></i>
            <span class="menu-title">SubCategory</span>
            <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-subCategory">
            <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('product.subCategory.create') }}">Create
                        SubCategory</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('product.subCategory.view') }}">view
                        SubCategory</a></li>


            </ul>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#ui-order" aria-expanded="false" aria-controls="ui-basic">
            <i class="icon-disc menu-icon"></i>
            <span class="menu-title">Order</span>
            <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-order">
            <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="{{ route('request.list',) }}">Oder
                        Request
                    </a></li>


            </ul>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#ui-customer" aria-expanded="false" aria-controls="ui-basic">
            <i class="icon-disc menu-icon"></i>
            <span class="menu-title">Customer</span>
            <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-customer">
            <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="{{ route('customer.view') }}">Customer
                        list</a></li>

            </ul>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="">
            <i class="icon-pie-graph menu-icon"></i>
            <span class="menu-title">Charts</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="pages/tables/basic-table.html">
            <i class="icon-command menu-icon"></i>
            <span class="menu-title">Tables</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="pages/icons/feather-icons.html">
            <i class="icon-help menu-icon"></i>
            <span class="menu-title">Icons</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
            <i class="icon-head menu-icon"></i>
            <span class="menu-title">User list</span>
            <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="auth">
            <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a>
                </li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/login-2.html"> Login 2
                    </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register
                    </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/register-2.html"> Register
                        2 </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/lock-screen.html">
                        Lockscreen </a></li>
            </ul>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="docs/documentation.html">
            <i class="icon-book menu-icon"></i>
            <span class="menu-title">Documentation</span>
        </a>
    </li>
    </ul>
</nav