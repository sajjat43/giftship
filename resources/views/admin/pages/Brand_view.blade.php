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
{{-- <a href="{{route('product.create')}}" class="btn btn-primary"> Add product</a> --}}
<div class="col-xl-3 float-end m-3">
    <button class="btn btn-primary text-capitalize border-0" data-mdb-ripple-color="dark"
        onclick="printDiv('printableArea')"><i class="fas fa-print text-primary"></i> Print</button>
</div>
<div class="card" id="printableArea">
    <div class="card-body">
        <div>
            <table class=" table table-light" style="width: 100%">
                <h1 class="text-center py-3">All Brand List</h1>
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Brand name</th>
                        <th scope="col">Brand description</th>
                        <th scope="col">Brand Logo</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($brand as $key => $data)
                    <tr>
                        <th scope="row">{{ $key + 1 }}</th>
                        <td>{{ $data->Bname }} </td>
                        <td>{{ $data->Bdescription }} </td>
                        <td><img src="{{ url('uploads/uploads/Brand/' . $data->Bimage) }}" style="border-radius:4px"
                                width="100px" alt="Brand image"></td>
                        <td>
                            <a href="" class="btn btn-info">View</a>
                            <a href="" class="btn btn-success">Update</a>
                            {{-- <a href="{{route('product.category.delete', $data->Cid)}}"
                                class="btn btn-danger">Delete</a> --}}
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