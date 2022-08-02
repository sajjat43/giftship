@extends('master')
@section('content')
<h1>Request List</h1>
@if (session()->has('success'))
<p class="alert alert-success">
    {{ session()->get('success') }}
</p>
@endif
<div class="col-xl-3  mt-3">
    <button class="btn btn-light text-capitalize border-0" data-mdb-ripple-color="dark"
        onclick="printDiv('printableArea')"><i class="fas fa-print text-primary"></i> Print</button>
</div>
<form action="{{ route('request.list') }}" method="GET">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <input value="" type="text" placeholder="Search" name="search" class="form-control">
        </div>
        <div class="col-md-4">
            <button type="submit" class="btn btn-success">Search</button>
        </div>
    </div>
</form>
<style>
    th {
        text-align: left;
    }
   
</style>
<body  oncontextmenu='return false' class='snippet-body'>
    <div id="printableArea">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">User Name</th>
                <th scope="col">Total price</th>
                <th scope="col">Payment Status</th>


            </tr>
        </thead>
        <tbody>
            @foreach ($request as $key => $request)
            {{-- @dd($request); --}}
            <tr>
                <th scope="row">{{ $key + 1 }}</th>
                <td>{{ $request->user->name }}</td>

                    <td>
                        TK {{ $request->total }}
                    </td>
                    <td>
                        {{ $request->payment_status }}
                    </td>


                <td>

                    <a href="{{ route('request.invoice', $request->user->id) }}" class="btn btn-success"><i
                            class="fa-solid fa-eye"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

</body>
<script>
    function printDiv(printableArea) {
        var printContents = document.getElementById(printableArea).innerHTML;
        var originalContents = document.body.innerHTML;

        document.body.innerHTML = printContents;

        window.print();

        document.body.innerHTML = originalContents;
    }
</script>

@endsection