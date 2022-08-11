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

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>OFDEM</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="Free HTML Templates" name="keywords" />
    <meta content="Free HTML Templates" name="description" />

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon" />

    <!-- Google Web Fonts -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet" />

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet" />
    <link rel="shortcut icon" href="{{ url('Backend/images/favicon.png') }}" />
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
</head>

<body>
    <!-- Page Header Start -->
    <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Checkout</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="{{ route('manage.home') }}">Home</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">Checkout</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Checkout Start -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5">
            <div class="col-lg-8">
                <div class="mb-4">
                    <h4 class="font-weight-semi-bold mb-4">Billing Address</h4>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <div class="container">

                                <form action="{{ route('pay.now') }}" method="POST" enctype="multipart/form-data">
                                    {{-- <form action="{{ route('check.out') }}" method="POST"
                                        enctype="multipart/form-data"> --}}
                                        @csrf
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Full Name</label>
                                            <input type="text" class="form-control" id="exampleInputPassword1"
                                                name="name" placeholder="Enter your Full Name">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email address</label>
                                            <input type="email" name="email" class="form-control"
                                                id="exampleInputEmail1" aria-describedby="emailHelp"
                                                placeholder="Enter email">
                                            <small id="emailHelp" class="form-text text-muted">We'll never share your
                                                email with anyone
                                                else.</small>
                                        </div>


                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Mobile</label>
                                            <input type="number" class="form-control" id="exampleInputPassword1"
                                                name="mobile" placeholder="Enter your mobile number">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Address</label>
                                            <input type="text" class="form-control" id="exampleInputPassword1"
                                                name="Address" placeholder="Enter your Current Address">
                                        </div>
                                        <button type="submit" class="btn btn-primary my-2">Pay Now</button>
                                    </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card border-secondary mb-5">
                    <div class="card-header bg-secondary border-0">
                        <h4 class="font-weight-semi-bold m-0">Order Total</h4>
                    </div>
                    @if ($carts)
                    <div class="card-body">

                        <hr class="mt-0" />
                        <div class="d-flex justify-content-between mb-3 pt-1">
                            <h6 class="font-weight-medium">Subtotal</h6>
                            <h6 class="font-weight-medium">{{ array_sum(array_column($carts, 'subtotal')) }} taka</h6>
                        </div>
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-medium">Shipping</h6>
                            <h6 class="font-weight-medium">50 taka</h6>
                        </div>
                        <div class="d-flex justify-content-between">
                            @if(session()->has('coupon'))
                            <h6 class="font-weight-medium">Discount ({{session()->get('coupon')['name']}}) : <a
                                    href="{{route('delete.coupon')}}">Remove</a> </h6>
                            <h6 class="font-weight-medium">- {{session()->get('coupon')['discount']}} taka</h6>
                            @endif
                        </div>
                    </div>
                    @endif
                    <div class="card-footer border-secondary bg-transparent">

                        <div class="d-flex justify-content-between mt-2">
                            @if($carts && !session()->has('coupon'))
                            <h5 class="font-weight-bold">Total</h5>
                            <h5 class="font-weight-bold">{{ array_sum(array_column($carts, 'subtotal'))+ 50 }} taka</h5>
                            @endif

                            @if(session()->has('coupon'))
                            
                            <h5 class="font-weight-bold">Total</h5>
                            <h5 class="font-weight-bold">{{ array_sum(array_column($carts, 'subtotal'))+ 50
                                -session()->get('coupon')['discount']}} taka</h5>

                            @endif
                        </div>

                    </div>

                </div>
                <div class="have-code-container">
                    <form action="{{route('coupon.apply')}}" method="POST">
                        @csrf
                        <h5>have coupon?</h5>
                        <input type="text" name="coupon_code" id="coupon_code">
                        <button type="submit" class="button button-plain">Apply</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Checkout End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
    {!! Toastr::message() !!}
</body>

</html>