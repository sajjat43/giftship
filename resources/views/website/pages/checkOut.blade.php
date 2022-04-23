@if (session()->has('message'))
    <p class="alert alert-success">
        {{ session()->get('message') }}
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
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<div class="container">

    <form action="{{ route('pay.now') }}" method="POST" enctype="multipart/form-data">
        {{-- <form action="{{ route('check.out') }}" method="POST" enctype="multipart/form-data"> --}}
        @csrf
        <div class="form-group">
            <label for="exampleInputPassword1">Full Name</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="name"
                placeholder="Enter your Full Name">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>


        <div class="form-group">
            <label for="exampleInputPassword1">Mobile</label>
            <input type="number" class="form-control" id="exampleInputPassword1" name="mobile"
                placeholder="Enter your mobile number">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Address</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="Address"
                placeholder="Enter your Current Address">
        </div>


        <button type="submit" class="btn btn-primary">Pay Now</button>
    </form>

</div>
