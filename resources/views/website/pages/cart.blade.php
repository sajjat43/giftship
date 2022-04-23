<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
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
        .cart {
            margin: 60px;

        }

        .homeButton {
            padding: 20px;
            text-decoration: none;
            background-color: #c5b8b8;
            color: black;
            border-radius: 8px;
        }

    </style>
    <div class='cart'>
        {{-- ------------------------------------- --}}
        <a class="homeButton" href="{{ route('manage.home') }}">Home</a>
        <h1 style="padding-top: 100px;">You have({{ session()->has('cart') ? count(session()->get('cart')) : 0 }})
            product
        </h1>
        {{-- @dd(session()->has('cart')) --}}
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Sub Total</th>
                    {{-- <th scope="col">remove</th> --}}
                </tr>
            </thead>
            <tbody>
                {{-- @dd($carts) --}}
                @if ($carts)

                    @foreach ($carts as $key => $data)
                        <tr>
                            <th scope="row">{{ $key }}</th>
                            <td>{{ $data['product_name'] }}</td>

                            <td>{{ $data['product_price'] }}</td>
                            <td>
                                <div class="col-md-6">
                                    <form action="{{ route('cart.qty.update', $key) }}" method="get">
                                        @csrf
                                        <input type="number" class="form-control" value="{{ $data['product_qty'] }}"
                                            name="quantity" required>
                                        <button class="btn btn-primary" type="submit">
                                            <i class="fa fa-refresh"></i></button>
                                    </form>
                                </div>
                            </td>
                            <td class="cart__total">{{ $data['subtotal'] }}
                        </tr>
                    @endforeach
                    <td>Total Price: <span>{{ array_sum(array_column($carts, 'subtotal')) + 50 }}
                    </td>
                @endif

            </tbody>

        </table>
        <div class="card-footer">

        </div>
        <a href="{{ route('cart.clear') }}" class="btn btn-danger">Clear Cart</a>
        {{-- <a href="{{ route('check.out') }}" class="btn btn-success ">Buy Now</a> --}}
        <a href="{{ route('check.out.form') }}" class="btn btn-success ">Buy Now</a>


    </div>

    {{-- -----------------------new------------------ --}}

    {{-- <style>
        @media (min-width: 1025px) {
            .h-custom {
                height: 100vh !important;
            }
        }

        .card-registration .select-input.form-control[readonly]:not([disabled]) {
            font-size: 1rem;
            line-height: 2.15;
            padding-left: .75em;
            padding-right: .75em;
        }

        .card-registration .select-arrow {
            top: 13px;
        }

        .bg-grey {
            background-color: #eae8e8;
        }

        @media (min-width: 992px) {
            .card-registration-2 .bg-grey {
                border-top-right-radius: 16px;
                border-bottom-right-radius: 16px;
            }
        }

        @media (max-width: 991px) {
            .card-registration-2 .bg-grey {
                border-bottom-left-radius: 16px;
                border-bottom-right-radius: 16px;
            }
        }

    </style>

    <section class="h-100 h-custom" style="background-color: #d2c9ff;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12">
                    <div class="card card-registration card-registration-2" style="border-radius: 15px;">
                        <div class="card-body p-0">
                            <div class="row g-0">
                                <div class="col-lg-8">
                                    <div class="p-5">

                                        <div class="d-flex justify-content-between align-items-center mb-5">
                                            <h1 class="fw-bold mb-0 text-black">Shopping Cart</h1>


                                            <h6 class="mb-0 text-muted">
                                                ({{ session()->has('cart') ? count(session()->get('cart')) : 0 }})
                                                items
                                            </h6>
                                        </div>

                                        <tbody>
                                            <hr class="my-4">
                                            @if ($carts)

                                                @foreach ($carts as $key => $data)
                                                    <div
                                                        class="row mb-4 d-flex justify-content-between align-items-center">


                                                        <div class="col-md-3 col-lg-3 col-xl-3">

                                                            <h6 class="text-muted">
                                                                {{ $data['product_name'] }}</h6>

                                                            <h6 class="text-black mb-0"></h6>
                                                        </div>

                                                        <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                                                            <form action="{{ route('cart.qty.update', $key) }}"
                                                                method="GET">
                                                                @csrf
                                                                <div class="col-md"></div>
                                                                <div class="col-md"><input type="number"
                                                                        name="product_qty" placeholder="">
                                                                </div>
                                                                <div class="col-md-4"><button type="submit"
                                                                        class="btn btn-success">Update</button>
                                                                </div>
                                                                <div class="col-md-2"></div>


                                                            </form>
                                                        </div>
                                                        <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                                            <h6 class="mb-0">
                                                                {{ $data['product_price'] }}</h6>
                                                        </div>

                                                        <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                                            <a href="#!" class="text-muted"><i
                                                                    class="fas fa-times"></i></a>
                                                        </div>

                                                    </div>
                                                @endforeach
                                            @endif
                                            <hr class="my-4">



                                            <hr class="my-4">

                                            <div class="pt-5">
                                                <h6 class="mb-0"><a href="#!" class="text-body"><i
                                                            class="fas fa-long-arrow-alt-left me-2"></i>Back to
                                                        shop</a>
                                                </h6>
                                            </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 bg-grey">
                                    <div class="p-5">
                                        <div class="d-flex justify-content-between mb-4">
                                            <h5 class="text-uppercase">items
                                                ({{ session()->has('cart') ? count(session()->get('cart')) : 0 }})
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section> --}}



    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>
