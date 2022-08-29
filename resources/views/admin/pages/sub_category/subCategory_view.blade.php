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
{{-- <a href="{{route('product.create')}}" class="btn btn-primary"> Add product</a> --}}
<div class="container" id="printableArea">
<table class=" table table-light "  style="width: 100%">
    <h1 class="py-5">All SubCategory List</h1>
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">subCatagory name</th>
            <th scope="col">subCategory description</th>
            {{-- <th scope="col">category name</th> --}}
            <th scope="col">image</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($subcategory as $key => $data)
        <tr>
            <th scope="row">{{ $key + 1 }}</th>
            <td>{{ $data->subname }} </td>
            <td>{{ $data->subdescription }} </td>
            {{-- <td>{{ $data->category->Cname }} </td> --}}
            <td><img src="{{ url('uploads/uploads/subcategory/' . $data->subimage) }}" style="border-radius:4px"
                    width="100px" alt="Category image"></td>
            <td>
                <a href="{{ route('update.subCategory', $data->id) }}" class="btn btn-info"><i
                        class="fa-solid fa-pen-to-square"></i></a></a>
                {{-- <a href="{{ route('category.delete', $data->id) }}" class="btn btn-success">Delete</a> --}}
                {{-- <a href="{{route('product.category.delete', $data->Cid)}}" class="btn btn-danger">Delete</a> --}}
            </td>
        </tr>
        @endforeach

    </tbody>
</table>
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