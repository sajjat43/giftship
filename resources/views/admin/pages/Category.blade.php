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
<form action="{{route('product.category.store')}}" method="POST" enctype="multipart/form-data">
@csrf

    <div class="form-group">
      <label for="">Category Name</label>
      <input type="text" class="form-control" id="Cname" name="Cname" placeholder="Enter your product name">

    </div>
    <div class="form-group">
        <label for="">Category ID</label>
        <input type="Number" class="form-control" id="Cid" name="Cid" placeholder="Enter your product catagory name">
      </div>


      <div class="form-group">
        <label for="" >description</label>
        <input type="text" class="form-control" id="Cdescription" name="Cdescription" placeholder="Short description">
      </div>
      <div class="form-group">
        <label for="">image</label>
        <input  type="file" class="form-control", name="Cimage" placeholder="insert image">
      </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  {{-- <a class="nav-link" href="{{ url('product_view') }}"></a> --}}

@endsection
