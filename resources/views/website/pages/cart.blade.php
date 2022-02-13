<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>


{{-- -------------------------------------  --}}

<h1 style="padding-top: 100px;">You have({{session()->has('cart') ? count(session()->get('cart')):0}}) product</h1>
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
        @if($carts)

        @foreach($carts as $key=>$data)
        <tr>
            <th scope="row">{{$key}}</th>
            <td>{{$data['product_name']}}</td>
            <td>{{$data['product_price']}}</td>
            <td>{{$data['product_qty']}}</td>
            <td>{{$data['product_price'] * $data['product_qty']}}</td>
            {{-- <td class="hidden text-right md:table-cell">
                <form action="{{ route('remove.cart') }}" method="GET">
                  @csrf
                  <input type="hidden" value="" name="id">
                  <button style="background-color: red" class="px-4 py-2 text-white bg-red-600">x</button>
              </form>

              </td> --}}
        </tr>
        @endforeach
            @endif

        </tbody>
    </table>
    <a href="{{route('cart.clear')}}" class="btn btn-danger">Clear Cart</a>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
