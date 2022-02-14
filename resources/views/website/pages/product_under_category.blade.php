@extends('website.master')
@section('content')
<style>
    .puc{
        margin: 70px;
    }
    .shedo{
        margin-bottom: 30px;
    }
</style>
<div class="puc">
<div class="row special-list">


    @foreach ($product as $product )
<div class="col-lg-4 col-md-6 special-grid best-seller shedo gx-5 ">
    <div class="products-single fix">
        <div class="box-img-hover">
            <div class="type-lb">

            </div>
            <img style="height: 200px" src="{{url('/uploads/uploads/product/',$product->image)}}" class="img-fluid" alt="Image">
            <div class="mask-icon">
                <ul>
                    <li><a href="{{route('crisis.view',$product->id)}}" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>

                </ul>
                <a class="cart" href="">Add to Cart</a>
            </div>
        </div>
        <div class="why-text detailscart">
            <h4>{{$product->name}}</h4>
            <h5>BDT: {{$product->price}}</h5>
            <h5> {{$product->description}}</h5>
            <a href="{{route('add.to.cart',$product->id)}}" class="btn btn-primary">add cart</a>
        </div>
    </div>
</div>
    @endforeach


</div>
</div>
</div>
</div>
@endsection
