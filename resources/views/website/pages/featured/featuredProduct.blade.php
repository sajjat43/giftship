@extends('website.master')
@section('content')
    <div class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>featured product</h2>
                    <div class="row">
                        @foreach ($product as $item)
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img src="{{ url('/uploads/uploads/product/' . $item->image) }}"
                                        style="border-radius:4px" margin-left="20%" height="200px" width="200px"
                                        alt="product image">
                                    <div class="card-body">
                                        <h5>Name: {{ $item->name }}</h5>
                                        <span class="float-start">Price: {{ $item->price }}</span>
                                        <p>
                                            Short description: {{ $item->description }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
