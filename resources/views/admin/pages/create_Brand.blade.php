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
    <form action="{{ route('brand.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="">Brand Name</label>
            <input type="text" class="form-control" id="Bname" name="Bname" placeholder="Enter your product name">

        </div>
        <div class="form-group">
            <label for="">Brand description</label>
            <input type="text" class="form-control" id="Bdescription" name="Bdescription" placeholder="Short description">
        </div>
        <div class="form-group">
            <label for="">brand image</label>
            <input type="file" class="form-control" , name="Bimage" placeholder="insert image">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    {{-- <a class="nav-link" href="{{ url('product_view') }}"></a> --}}

@endsection
