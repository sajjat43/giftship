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
    <h1>SubCategory Create</h1>
    <form action="{{ route('product.subCategory.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
       
        <div class="form-group">
            <label for="">SubCategory Name</label>
            <input type="text" class="form-control" id="subname" name="subname" placeholder="Enter your product name">

        </div>
        <div class="form-group">
            <label for="">description</label>
            <input type="text" class="form-control" id="subdescription" name="subdescription"
                placeholder="Short description">
        </div>
        <div class="form-group">
            <label for="">image</label>
            <input type="file" class="form-control" , name="subimage" placeholder="insert image">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    {{-- <a class="nav-link" href="{{ url('product_view') }}"></a> --}}

@endsection
