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
    <table class=" table table-light " style="width: 100%">
        <h1 class="py-5">All SubCategory List</h1>
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">subCatagory name</th>
                <th scope="col">subCategory description</th>
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
                    <td><img src="{{ url('uploads/uploads/subcategory/' . $data->subimage) }}" style="border-radius:4px"
                            width="100px" alt="Category image"></td>
                    <td>
                        <a href="{{ route('update.subCategory', $data->id) }}" class="btn btn-info">Update</a>


                        {{-- <a href="{{ route('category.delete', $data->id) }}" class="btn btn-success">Delete</a> --}}
                        {{-- <a href="{{route('product.category.delete', $data->Cid)}}" class="btn btn-danger">Delete</a> --}}
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>



@endsection
