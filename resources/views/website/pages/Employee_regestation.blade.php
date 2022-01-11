@extends('website.master')
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
<div class="container">

    <form action="{{route('Employee.regestation.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
    <div class="form-group">
        <label for="exampleInputPassword1">Full Name</label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="name" placeholder="Enter your Full Name">
      </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
    </div>
    {{-- <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="re_password" placeholder="Enter your Password again">
      </div> --}}
      <div class="form-group">
        <label for="exampleInputPassword1">Mobile</label>
        <input type="number" class="form-control" id="exampleInputPassword1" name="mobile" placeholder="Enter your mobile number">
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
