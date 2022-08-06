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
<form action="{{ route('product.update', $product->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="">Name:</label>
        <input value="{{ $product->name }}" type="text" class="form-control" id="exampleInputEmail1" name="name"
            placeholder="Enter your product name">

    </div>
    <div class="form-group">
        <label for="exampleFormControlSelect1">product Category</label>
        <select name="category" class="form-control" id="exampleFormControlSelect1">
            <option value="{{ $product->category->id }}">{{ $product->category->Cname }}</option>
            @foreach ($categories as $category)
            <option value="{{ $category->id }}">{{ $category->Cname }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="exampleFormControlSelect1">product subCategory</label>
        <select name="subcategory" class="form-control" id="exampleFormControlSelect1">
            <option value="{{ $product->subcategory->id }}">{{ $product->subcategory->subname }}</option>
            @foreach ($subcategory as $subcategory)
            <option value="{{ $subcategory->id }}">{{ $subcategory->subname }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="exampleFormControlSelect1">Brand Name</label>
        <select name="brand" class="form-control" id="exampleFormControlSelect1">
            <option value="{{ $product->brand->id }}">{{ $product->brand->Bname }}</option>
            @foreach ($brand as $brand)
            <option value="{{ $brand->id }}">{{ $brand->Bname }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="">Price</label>
        <input value="{{ $product->price }}" type="number" class="form-control" id="exampleInputPassword1" name="price"
            placeholder="price">
    </div>

    <div class="form-group">
        <label for="">Quantity</label>
        <input value="{{ $product->qty }}" type="number" class="form-control" id="exampleInputPassword1" name="qty"
            placeholder="Quantity">
    </div>

    <div class="form-group">
        <label for="">description</label>
        <input value="{{ $product->description }}" type="text" class="form-control" id="exampleInputPassword1"
            name="description" placeholder="Short description">
    </div>
    <div class="form-group">
        <label for="">image</label>
        <input value="{{ url('/uploads/uploads/product/' . $product->image) }}" type="file" class="form-control" ,
            name="image" placeholder="insert image">
    </div>
    <fieldset class="row mb-3">
        <legend class="col-form-label col-sm-2 pt-0" style="font-size:20px;"><b>featured product</legend></b>
        <div class="col-sm-10">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="featured" id="gender" value="1">
                <label class="form-check-label" for="featured">
                    Yes
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="featured" id="gender" value="0">
                <label class="form-check-label" for="featured">
                    NO
                </label>
            </div>

        </div>
    </fieldset>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
{{-- <a class="nav-link" href="{{ url('product_view') }}"></a> --}}

@endsection