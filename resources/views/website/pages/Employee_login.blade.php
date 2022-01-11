@extends('website.master')
@section('content')
<div class="container">

<form >

    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
    </div>


    <button type="submit" class="btn btn-primary">Submit</button>
    <div class=""><a>You need to regestation first.</a></div>
<div class=""> <a type="button" class="btn btn-primary" href="{{route('Employee.regestation')}}" > Resestation</a></div>

  </form>
</div>
@endsection
