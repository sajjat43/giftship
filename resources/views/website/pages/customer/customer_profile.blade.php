@extends('website.master')
@section('content')

<div class="page-content " id="page-content">
    <div class="padding">

        <div class="container  ">
            <div class="col-xl-12 col-md-12">
                <div class="card user-card-full">
                    <div class="row m-l-6 m-r-6">
                        <a href="{{route('customer.profile.update',auth()->user()->id)}}" class="btn btn-success">update
                            Your Profile</a>
                        <div class="col-sm-12 bg-c-lite-green user-profile">
                            <div class="card-block text-center  text-white">
                                <div class="m-b-25">
                                    @if (Auth()->user()->image == null)
                                    <img src="https://img.icons8.com/bubbles/100/000000/user.png" class="img-radius"
                                        alt="User-Profile-Image">
                                    @else<img src="{{ url('/uploads/uploads/users/', Auth()->user()->image) }}"
                                        class="img-radius" alt="User-Profile-Image">
                                    @endif
                                </div>
                                <h6 class="f-w-600"> {{ Auth()->user()->name }}</h6>
                                <p>Premiem Customer</p> <i
                                    class=" mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16"></i>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="card-block">
                                <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Information</h6>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Email</p>
                                        <h6 class="text f-w-400">{{ Auth()->user()->email }}</h6>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Phone</p>
                                        <h6 class="text f-w-400">{{ Auth()->user()->mobile }} </h6>
                                    </div>
                                </div>
                                {{-- <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600">Projects</h6> --}}
                                <div class="row mt-5">
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Address</p>
                                        <h6 class="text f-w-400">{{ Auth()->user()->address }} </h6>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Gender</p>
                                        <h6 class="text f-w-400">{{ Auth()->user()->gender }}</h6>
                                    </div>
                                </div>
                                <ul class="social-link list-unstyled m-t-40 m-b-10">
                                    <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title=""
                                            data-original-title="facebook" data-abc="true"><i
                                                class="mdi mdi-facebook feather icon-facebook facebook"
                                                aria-hidden="true"></i></a></li>
                                    <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title=""
                                            data-original-title="twitter" data-abc="true"><i
                                                class="mdi mdi-twitter feather icon-twitter twitter"
                                                aria-hidden="true"></i></a></li>
                                    <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title=""
                                            data-original-title="instagram" data-abc="true"><i
                                                class="mdi mdi-instagram feather icon-instagram instagram"
                                                aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    body {
        background-color: #f9f9fa;
        font-family: Poppins, sans-serif;
    }

    .padding {
        padding: 3rem !important
    }

    .user-card-full {
        overflow: hidden
    }

    .card {
        border-radius: 5px;
        -webkit-box-shadow: 0 1px 20px 0 rgba(69, 90, 100, 0.08);
        box-shadow: 0 1px 20px 0 rgba(69, 90, 100, 0.08);
        border: none;
        margin-bottom: 30px
    }

    .m-r-0 {
        margin-right: 0px
    }

    .m-l-0 {
        margin-left: 0px
    }

    .user-card-full .user-profile {
        border-radius: 5px 0 0 5px
    }

    .bg-c-lite-green {
        background: -webkit-gradient(linear, left top, right top, from(#f29263), to(#ee5a6f));
        background: linear-gradient(to right, #ee5a6f, #f29263)
    }

    .user-profile {
        padding: 20px 0
    }

    .card-block {
        padding: 1.25rem
    }

    .m-b-25 {
        margin-bottom: 25px
    }

    .img-radius {
        border-radius: 5px
    }

    h6 {
        font-size: 14px
    }

    .card .card-block p {
        line-height: 25px
    }

    @media only screen and (min-width: 1400px) {
        p {
            font-size: 14px
        }
    }

    .card-block {
        padding: 1.25rem
    }

    .b-b-default {
        border-bottom: 1px solid #e0e0e0
    }

    .m-b-20 {
        margin-bottom: 20px
    }

    .p-b-5 {
        padding-bottom: 5px !important
    }

    .card .card-block p {
        line-height: 25px
    }

    .m-b-10 {
        margin-bottom: 10px
    }

    .text-muted {
        color: #919aa3 !important
    }

    .b-b-default {
        border-bottom: 1px solid #e0e0e0
    }

    .f-w-600 {
        font-weight: 600
    }

    .m-b-20 {
        margin-bottom: 20px
    }

    .m-t-40 {
        margin-top: 20px
    }

    .p-b-5 {
        padding-bottom: 5px !important
    }

    .m-b-10 {
        margin-bottom: 10px
    }

    .m-t-40 {
        margin-top: 20px
    }

    .user-card-full .social-link li {
        display: inline-block
    }

    .user-card-full .social-link li a {
        font-size: 20px;
        margin: 0 10px 0 0;
        -webkit-transition: all 0.3s ease-in-out;
        transition: all 0.3s ease-in-out
    }

    h6 {
        font-family: Poppins, sans-serif;
    }
</style>
@endsection