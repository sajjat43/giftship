@extends('website.master')
@section('content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

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
        background-color: #fdefef;

    }

    .homeButton {
        padding: 20px;
        text-decoration: none;
        background-color: #c5b8b8;
        color: black;
        border-radius: 8px;
    }

    .btn {
        padding: 14px;

    }

    .btn-danger {
        background-color: red;
    }

    .up {}

    .s {
        float: right;
    }
    .fa-solid {
        
    color: red;
    margin-left: 25px;
    font-size: 26px;

    }
</style>
<div class='cart'>
    {{-- ------------------------------------- --}}
    {{-- <a class="homeButton" href="{{ route('manage.home') }}">Home</a> --}}
    <h1 class="p-5 text-center">You have({{ session()->has('cart') ? count(session()->get('cart')) : 0 }})
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
                <th scope="col">remove</th>
            </tr>
        </thead>
        <tbody>
            <div>
                {{-- @dd($carts) --}}
                @if ($carts )

                @foreach ($carts as $key => $data)
                <tr>
                    <th scope="row">{{ $key }}</th>
                    <td>{{ $data['product_name'] }} </td>

                    <td>{{ $data['product_price'] }} .BDT</td>
                    <td>
                        <div class="col-md-4">
                            <form action="{{ route('cart.qty.update', $key) }}" method="get">
                                @csrf
                                <div class="up">
                                    <input type="number" class="form-control" value="{{ $data['product_qty'] }}" max="{{$data['max_qty']}}"
                                        name="quantity"  required>
                                    <button class="btn btn-primary" type="submit">
                                        <i class="fa fa-refresh"></i></button>
                                </div>
                            </form>
                        </div>
                    </td>
                    <td class="cart__total">{{ $data['subtotal'] }} .BDT</td>
                        <td><a href="{{route('cart.item.delete',$key)}}"><i class="fa-solid fa-xmark"></i></a></td>
                </tr>
                @endforeach
             @else
           {{-- <tr><h1 class="text-center">Cart Is Empty</h1></tr> --}}
                @endif
            </div>

        </tbody>

    </table>
    @if($carts)
    <div class="row mt-2 pb-5">
        <div class="col-md-8"></div>
        <div class="col-md-2"></div>
        <div class="col-md-2">
            <td><strong>Total Price: </strong><span>{{ array_sum(array_column($carts, 'subtotal')) }} .BDT
            </td>
        </div>
    </div>
    @endif
</div>
<div class="card-footer">
    @if(session()->has('cart'))
    <a href="{{ route('cart.clear') }}" class="btn btn-danger">Clear Cart</a>
    <a href="{{ route('check.out.form') }}" class="btn btn-success ">Buy Now</a>
    <a href="{{ route('cash.check.out.form') }}" class="btn btn-success ">Cash on dalivery</a>
    @endif
</div>



</div>
@endsection