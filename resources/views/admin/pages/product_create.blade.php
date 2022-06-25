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
<form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <h1 class="text-center py-3">Create Product</h1>
    <div class="form-group">
        <label for="">Name:</label>
        <input type="text" class="form-control" id="p_name" name="name" placeholder="Enter your product name">

    </div>
    <div class="form-group">
        <label for="exampleFormControlSelect1">product Category</label>
        <select name="category" class="form-control" id="exampleFormControlSelect1">
            @foreach ($categories as $category)
            <option value="{{ $category->id }}">{{ $category->Cname }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="exampleFormControlSelect1">subCategory Name</label>
        <select name="subcategory" class="form-control" id="exampleFormControlSelect1">
            @foreach ($subcategory as $subcategory)
            <option value="{{ $subcategory->id }}">{{ $subcategory->subname }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="exampleFormControlSelect1">Brand Name</label>
        <select name="brand" class="form-control" id="exampleFormControlSelect1">
            @foreach ($brand as $brand)
            <option value="{{ $brand->id }}">{{ $brand->Bname }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="">Price</label>
        <input type="number" class="form-control" id="e" name="price" placeholder="price">
    </div>
    <div class="form-group">
        <label for="">Quantity</label>
        <input type="number" class="form-control" id="e" name="qty" placeholder="quentity">
    </div>

    <div class="form-group">
        <label for="">description</label>
        <input type="text" class="form-control" id="description" name="description" placeholder="Short description">
    </div>
    <div class="form-group">
        <label class="lavel" for="">image</label>
        <input type="file" class="form-control" , name="image" placeholder="insert image">
    </div>


    <button type="submit" class="btn btn-primary">Submit</button>
</form>
{{-- <a class="nav-link" href="{{ url('product_view') }}"></a> --}}
    
@endsection