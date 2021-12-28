

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>



<!------ Include the above in your HEAD tag ---------->
<form id="login-form" class="form" action="{{route('login.view')}}" method="post">

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
            <input type="password" name="password" placeholder="Enter your Password"  class="form-control">
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 form-group">
            <input type="submit" class="btn btn-block btn-login" placeholder="Enter your Password" >
        </div>
    </div>
</from>

</div>



<style type="text/css">
body{
    background-color:#5286F3;
    font-size:14px;
    color:#fff;
}
.simple-login-container{
    width:300px;
    max-width:100%;
    margin:50px auto;
}
.simple-login-container h2{
    text-align:center;
    font-size:20px;
}

.simple-login-container .btn-login{
    background-color:#FF5964;
    color:#fff;
}
a{
    color:#fff;
}

</style>
