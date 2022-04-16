@extends('website.master')
@section('content')
    <style>
        .small-img-group {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
        }

        .small-img-col {
            flex-basis: 24%;
            cursor: pointer;
        }

        .sproduct select {
            display: block;
            padding: 5px 10px;
        }

        .sproduct input {
            width: 50px;
            height: 40px;
            padding-left: 10px;
            font-size: 16px;
            margin-right: 10px;
        }

        .sproduct input:focus {
            outline: none;
        }

        .buy-btn {
            background: #f88408;
            opacity: 1;
            transform: 0.3s all;
        }

    </style>
    @foreach ($product as $product)
        <section class="container sproduct my-5 pt-5">
            <div class="row mt-5">
                <div class="col-lg-5 col-md-12 col-12">
                    <img class="img-fluid w-100 pb-1" id="mainImg"
                        src="{{ url('/uploads/uploads/product/' . $product->image) }}" alt="">

                    <div class="small-img-group">
                        <div class="small-img-col">
                            <img src="Screenshot (174).png" width="100%" class="small-img" alt="">
                        </div>
                        <div class="small-img-col">
                            <img src="Screenshot (175).png" width="100%" class="small-img" alt="">
                        </div>

                        <div class="small-img-col">
                            <img src="Screenshot (173).png" width="100%" class="small-img" alt="">
                        </div>
                    </div>


                </div>



                <div class="col-lg-6 col-md-12 col-12">
                    <h6>home/show</h6>
                    <h3 class="py-4">{{ $product->name }}</h3>
                    <h2>BDT: {{ $product->price }}</h2>
                    <select class="my-3">
                        <option>select size</option>
                        <option>XXL</option>
                        <option>XL</option>
                        <option>L</option>
                        <option>M</option>
                        <option>S</option>
                    </select>
                    <input type="number" value="1">
                    <a class="buy-btn" type="button" href="{{ route('add.to.cart', $product->id) }}"> Add to
                        Cart</a>
                    <h4 class="mt-5 mb-5">product details</h4>
                    <span> {{ $product->description }}</span>
    @endforeach

    </div>
    </div>

    </section>
    <script>
        var mainImg = document.getElementById('mainImg');
        var smallimg = document.getElementsByClassName('small-img');
        smallimg[0].onclick = function() {
            mainImg.src = smallimg[0].src;
        }
        smallimg[1].onclick = function() {
            mainImg.src = smallimg[1].src;
        }
        smallimg[2].onclick = function() {
            mainImg.src = smallimg[2].src;
        }
    </script>
@endsection
