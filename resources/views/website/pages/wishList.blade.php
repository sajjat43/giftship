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

        .count {
            margin-left: 500px;
        }

        .wish {
            padding: 15px;
            background-color: black;
            border-radius: 9px;
        }
        .clear{
            padding: 15px;
            background-color: rgb(43, 48, 47);
            border-radius: 9px;
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
        <div class="count">
            <h1>You have ({{session()->has('wishlist') ? count(session()->get('wishlist')) : 0
                }})
                product
            </h1>
        </div>

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
                        <td>
                            <a href="{{ route('add.to.cart', $key) }}" class="btn btn-primary wish">add
                                cart</a>
                        </td>
                    </tr>

                    @endforeach


                    @endif

                </tbody>

            </table>
            @if( session()->has('wishlist'))
            <a href="{{ route('clear.wishlist') }}" class="btn btn-danger clear">Clear</a>
            @endif
        </div>

        {{-- <a href="{{ route('check.out') }}" class="btn btn-success ">Buy Now</a> --}}
       
    </div>

</body>

@endsection