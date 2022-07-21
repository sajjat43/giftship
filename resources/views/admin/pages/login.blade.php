<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>



<!------ Include the above in your HEAD tag ---------->
<div class="container p-5">
    <form id="login-form" class="form m-5 mid" action="{{ route('login.view') }}" method="post">

        @csrf
        <div class="simple-login-container">
            <h2>Admin Login</h2>
            <div class="row">
                <div class="col-md-12 form-group">
                    <input type="email" class="form-control" name="email" placeholder="Enter your email">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 form-group">
                    <input type="password" name="password" placeholder="Enter your Password" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 form-group">
                    <input type="submit" class="btn btn-block btn-login" placeholder="Enter your Password">
                </div>
            </div>
        </div>
    </form>
</div>


<style type="text/css">
    body {
        background: linear-gradient(180deg,
                rgba(37, 138, 189, 1) 48%,
                rgba(44, 192, 178, 1) 84%);
        font-size: 14px;
        color: #fff;
    }

    h2 {
        font-size: 20px;
    }

    .simple-login-container {
        width: 300px;
        max-width: 100%;
        margin: 50px auto;
    }

    .simple-login-container h2 {
        text-align: center;
        font-size: 43px;
        margin-bottom: 56px;

    }

    .simple-login-container .btn-login {
        background: linear-gradient(-179deg, rgba(37, 138, 189, 1) 39%, rgba(44, 192, 178, 1) 83%);
        color: #fff;
    }

    a {
        color: #fff;
    }

    .mid {
        background: linear-gradient(358deg, rgba(23, 176, 189, 7) 48%, rgba(45, 196, 178, 1) 61%);
        border-radius: 35px;
        padding: 33px;
        box-shadow: 0px 1px 21px 4px;
    }
</style>