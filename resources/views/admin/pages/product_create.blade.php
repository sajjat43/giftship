@extends('master')
@section('content')
@if(session()->has('success'))
    <p class="alert alert-success">
      {{session()->get('success')}}
    </p>
    @endif

    @if ($errors->any())
              <div class="alert alert-danger">
                <ul>
                  @foreach ($errors->all() as $error)
                    <li>
                      {{$error}}
                    </li>
                  @endforeach
                </ul>
              </div>
  @endif
<form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="">Name:</label>
      <input type="text" class="form-control" id="exampleInputEmail1" name="name" placeholder="Enter your product name">

    </div>
    <div class="form-group">
        <label for="">Product catagory</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="product_category" placeholder="Enter your product catagory name">
      </div>
    <div class="form-group">
      <label for="">Price</label>
      <input type="number" class="form-control" id="exampleInputPassword1" name="price" placeholder="price">
    </div>

      <div class="form-group">
        <label for="" >description</label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="description" placeholder="Short description">
      </div>
      <div class="form-group">
        <label for="">image</label>
        <input  type="file" class="form-control", name="image" placeholder="insert image">
      </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  {{-- <a class="nav-link" href="{{ url('product_view') }}"></a> --}}

@endsection
