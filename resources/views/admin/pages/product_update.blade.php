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
<form action="{{route('product.update',$product->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="">Name:</label>
      <input value="{{$product->name}}" type="text" class="form-control" id="exampleInputEmail1" name="name" placeholder="Enter your product name">

    </div>
    <div class="form-group">
        <label for="">Product catagory</label>
        <input value="{{$product->product_category}}" type="text" class="form-control" id="exampleInputEmail1" name="product_category" placeholder="Enter your product catagory name">
      </div>
    <div class="form-group">
      <label for="">Price</label>
      <input value="{{$product->price}}" type="number" class="form-control" id="exampleInputPassword1" name="price" placeholder="price">
    </div>

      <div class="form-group">
        <label for="" >description</label>
        <input value="{{$product->description}}" type="text" class="form-control" id="exampleInputPassword1" name="description" placeholder="Short description">
      </div>
      <div class="form-group">
        <label for="">image</label>
        <input value="{{url('/uploads/uploads/product/'.$product->image)}}" type="file" class="form-control", name="image" placeholder="insert image">
      </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  {{-- <a class="nav-link" href="{{ url('product_view') }}"></a> --}}

@endsection
