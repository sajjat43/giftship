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



    <div class="container login">

        <form id="login-form" class="form" action="{{ route('user.login.view') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password"
                    placeholder="Password">
            </div>

            <div class="container">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a type="button" class="btn btn-primary" href="{{ route('forget.password.get') }}">
                    Forget password</a>
            </div>
            <div class=""></div>

            <div class="resestation">
                <h3>You need to registration first.</h3>
                <a type="button" class="btn btn-primary" href="{{ route('User.regestation') }}">
                    registration</a>
                    <a href="{{route('admin.login')}}" class="btn btn-primary btn-block">For admin login</a>
            </div>
            <div class="container text-center "><strong>OR,</strong></div>
            <div class="form-group row container p-3">
                <div class="col-md-6offset-md-3 text-center">
                    <a href="{{ route('Login.google') }}" class="btn btn-primary btn-block"><i
                            class="fa-brands fa-google"></i></a>
                   
                    <a href="{{ route('Login.github') }}" class="btn btn-primary btn-block"> <i
                            class="fa-brands fa-github"></i></a>
                            
                </div>
            </div>

        </form>
    </div>
    <style>
        .btn-primary {
            padding: 18px !important;
         
            border-radius: 8px !important;
            margin-right: 30px;
        }

        .resestation {
            margin-top: 20px;
        }

        label {
            font-size: 30px;
        }

        .login {
            background-color: rgb(177, 235, 70);
            border-radius: 10px;
        }

    </style>

@endsection
