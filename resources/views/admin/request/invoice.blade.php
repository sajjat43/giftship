@extends('master')
@section('content')
    <!doctype html>
    <html>

    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <title>Snippet - BBBootstrap</title>
        <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css' rel='stylesheet'>
        <link href='' rel='stylesheet'>
        <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
        <style>
            body {
                background: #eee
            }

        </style>
    </head>

    @if (session('success'))
        <div class="alert alert-success">
            {!! session('success') !!}
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger">
            {!! session('error') !!}
        </div>
    @endif
    {{-- <a href="{{ route('create.pdf') }}" class="btn btn-success">PDF</a> --}}

    <body oncontextmenu='return false' class='snippet-body'>
        <div class="container mt-5">
            <div class="d-flex justify-content-center row">
                <div class="col-md-8">
                    <div class="p-3 bg-white rounded">
                        <div class="row">
                            <div class="col-md-6">
                                <h3 class="text-uppercase">{{ $request->user->name }}</h3>

                            </div>
                        </div>
                        <div class="mt-3">
                            <div class="table-responsive">
                                <table class="table">

                                    <thead>
                                        <tr>
                                            <th>Product Name</th>
                                            <th>Quantity</th>
                                            <th>Price</th>
                                            <th>Total Price</th>
                                            <th>Status</th>


                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($request->details as $key => $request)
                                            <tr>
                                                <td>{{ $request->product->name }}</td>

                                                <td>{{ $request->quantity }}</td>
                                                <td>{{ $request->product_price }}</td>
                                                <td>{{ $request->total_price }}</td>
                                                <td>

                                                    {{ $request->status }}

                                                </td>

                                                <td>

                                                    @if ($request->status == 'pending')
                                                        <a href="{{ route('product.cancel', $request->id) }}"
                                                            class="btn btn-danger">Cancel</a>
                                                    @endif
                                                    @if ($request->status == 'pending')
                                                        <a href="{{ route('product.approve', $request->id) }}"
                                                            class="btn btn-success">Approve</a>
                                                    @endif

                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        {{-- <div class="text-right mb-3"><button class="btn btn-danger btn-sm mr-5" type="button"></button></div> --}}
                    </div>
                </div>
            </div>
        </div>
        <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js'>
        </script>
        <script type='text/javascript' src=''></script>
        <script type='text/javascript' src=''></script>
        <script type='text/Javascript'></script>
    </body>

    </html>
@endsection
