@extends('master')
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

<table class=" table table-light" style="width: 100%">
    <h1 class="text-center py-3">All Discount Coupons</h1>
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Coupons Code</th>
            <th scope="col">Expairy Date</th>
            <th scope="col">Taka</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($coupon as $key => $data)
        <tr>
            <th scope="row">{{ $key + 1 }}</th>
            <td>{{ $data->code }} </td>
            <td>{{ $data->expiry_date }} </td>
            <td>{{ $data->value }} </td>
            <td>
                <a href="{{route('coupon.delete',$data->id)}}" class="btn btn-info"><i class="fa-solid fa-trash-can"></i></a>
                <a href="{{ route('coupon.update.form', $data->id) }}" class="btn btn-info"><i
                    class="fa-solid fa-pen-to-square"></i></a>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>



@endsection