@extends('master')
@section("content")

@if (session()->has('success'))
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

<div class="container Customer-login">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <form action="login" method="POST">
                @csrf
                <div class="mb-3">
x                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                  <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">password</label>
                  <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                </div>

                <button type="submit"  class="btn btn-primary">Submit</button>
              </form>
        </div>
    </div>
</div>
@endsection

