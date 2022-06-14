
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




    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>