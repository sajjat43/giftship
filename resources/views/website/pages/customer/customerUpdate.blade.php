@extends('website.master')
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
<div class="container">

    <form action="{{ route('customer.profile.update.store',auth()->user()->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="exampleInputPassword1">Full Name</label>
            <input type="text" value="{{ auth()->user()->name }}" class="form-control" id="exampleInputPassword1"
                name="name" placeholder="Enter your Full Name">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" value="{{ auth()->user()->email }}" name="email" class="form-control" id="exampleInputEmail1"
                aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Mobile</label>
            <input type="number" value="{{ auth()->user()->mobile }}" class="form-control" id="exampleInputPassword1"
                name="mobile" placeholder="Enter your mobile number">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Address</label>
            <input type="text" value="{{ auth()->user()->address }}" class="form-control" id="exampleInputPassword1"
                name="address" placeholder="Enter your Current Address">
        </div>
        <div class="form-group">
            <label for="">image</label>
            <input type="file" class="form-control" , name="image" placeholder="insert image">
        </div>
        <fieldset class="row mb-3">
            <legend class="col-form-label col-sm-2 pt-0" style="font-size:20px;"><b>Gender</legend></b>
            <div class="col-sm-10">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="gender" value="male">
                    <label class="form-check-label" for="gender">
                        Male
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="gender" value="female">
                    <label class="form-check-label" for="gender">
                        Female
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="gender" value="others">
                    <label class="form-check-label" for="gender">
                        Others
                    </label>
                </div>
            </div>
        </fieldset>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection