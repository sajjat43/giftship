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


<div class="col-xl-3 float-end m-3">
    <button class="btn btn-primary text-capitalize border-0" data-mdb-ripple-color="dark"
        onclick="printDiv('printableArea')"><i class="fas fa-print text-primary"></i> Print</button>
</div>
<div class="card" id="printableArea">
    <div class="card-body">
        <div>
            <table class=" table table-light" style="width: 100%">
                <h1 class="text-center py-2">All Customer List</h1>
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Mobile</th>
                        <th scope="col">Address</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Image</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($customer as $key => $data)
                    <tr>
                        <th scope="row">{{ $key + 1 }}</th>
                        <td>{{ $data->name }} </td>
                        <td>{{ $data->email }} </td>
                        <td>{{ $data->mobile }} </td>
                        <td>{{ $data->address }} </td>
                        <td>{{ $data->gender }} </td>
                        <td><img src="{{ url('/uploads/uploads/users/' . $data->image) }}" style="border-radius:4px"
                                width="100px" alt="product image"></td>
                        <td>
                        <td>
                            <a href="{{ route('customer.single.details', $data->id) }}" class="btn btn-info"><i
                                    class="fa-solid fa-eye"></i></a>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>

        </div>
    </div>
</div>
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