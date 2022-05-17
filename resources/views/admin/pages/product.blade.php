@extends('master')
@section('content')
    @if (session()->has('success'))
        <p class="alert alert-success">
            {{ session()->get('success') }}
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
    <a href="{{ route('product.create') }}" class="btn btn-primary"> Add product</a>
    <h1 class="text-center py-2">Product List</h1>
    <form action="{{ route('product.view') }}" method="GET">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <input type="text" value="" placeholder="search....." name="search" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Search</button>
    </form>

    </div>
    <table class=" table table-light" style="width: 100%">

        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Catacory</th>
                <th scope="col">subCatacory</th>
                <th scope="col">Description</th>
                <th scope="col">Price</th>
                <th scope="col">Quantity</th>
                <th scope="col">Featured Product</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($product as $key => $data)
                {{-- @dd($product); --}}
                <tr>
                    <th scope="row">{{ $key + 1 }}</th>
                    <td>{{ $data->name }} </td>
                    <td>{{ $data->category->Cname }} </td>
                    <td>{{ $data->subcategory->subname }} </td>
                    <td>{{ $data->description }} </td>
                    <td>{{ $data->price }} </td>
                    <td>{{ $data->qty }} </td>
                    <td>{{ $data->featured }} </td>
                    <td><img src="{{ url('/uploads/uploads/product/' . $data->image) }}" style="border-radius:4px"
                            width="100px" alt="product image"></td>
                    <td>
                        <a href="{{ route('product.view.details', $data->id) }}" class="btn btn-info"><i
                                class="fa-solid fa-eye"></i></a>
                        <a href="{{ route('product.edit', $data->id) }}" class="btn btn-success"><i
                                class="fa-solid fa-pen-to-square"></i></a>
                        <a href="{{ route('product.delete', $data->id) }}" class="btn btn-danger"><i
                                class="fa-solid fa-trash-can"></i></a>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>



@endsection
