@extends('website.master')
@section('content')
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
        <h1 style="padding-top: 100px;">You have ({{session()->has('wishlist') ? count(session()->get('wishlist')) : 0
            }})
            product
        </h1>

        <div class="container py-5">

            <table class="table">
                <thead>
                    <tr>
                        {{-- <th scope="col">#</th> --}}
                        <th scope="col">Product Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Action</th>

                    </tr>
                </thead>
                <tbody>

                    @if ($wishList )

                    @foreach ($wishList as $key => $item)
                    <tr>
                        {{-- <th scope="row">{{ $item['id'] }}</th> --}}
                        <td>{{ $item['product_name'] }}</td>
                        <td>{{ $item['product_price'] }}</td>
                        
                    </tr>
                    @endforeach
                    
                    {{-- <td>
                        <a href="{{ route('add.to.cart', $product->id) }}" class="btn btn-primary">add
                            cart</a>
                    </td> --}}
                    @endif

                </tbody>

            </table>
            <a href="{{ route('clear.wishlist') }}" class="btn btn-danger">Clear Cart</a>
        </div>

        {{-- <a href="{{ route('check.out') }}" class="btn btn-success ">Buy Now</a> --}}

    </div>

</body>

@endsection 