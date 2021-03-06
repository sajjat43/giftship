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
                    <div class="col-md-4">
                        <form action="{{ route('cart.qty.update', $key) }}" method="get">
                            @csrf
                            <input type="number" class="form-control" value="{{ $data['product_qty'] }}" name="quantity"
                                required>
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



@endsection