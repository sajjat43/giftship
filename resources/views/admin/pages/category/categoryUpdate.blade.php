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
    <h1>Category Update</h1>
    <form action="{{ route('product.category.update', $category->id) }}" method="POST" enctype="multipart/form-data">
        {{-- <input type="text"> --}}
        @csrf
        <div class="form-group">
            <label for="">Name:</label>
            <input value="{{ $category->Cname }}" type="text" class="form-control" id="exampleInputEmail1" name="Cname"
                placeholder="Enter your product name">

        </div>




        <div class="form-group">
            <label for="">description</label>
            <input value="{{ $category->Cdescription }}" type="text" class="form-control" id="exampleInputPassword1"
                name="Cdescription" placeholder="Short description">
        </div>
        <div class="form-group">
            <label for="">image</label>
            <input value="{{ url('/uploads/uploads/product/' . $category->Cimage) }}" type="file" class="form-control" ,
                name="Cimage" placeholder="insert image">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    {{-- <a class="nav-link" href="{{ url('product_view') }}"></a> --}}

@endsection
