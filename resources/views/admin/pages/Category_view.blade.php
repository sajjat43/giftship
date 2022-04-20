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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    {{-- <a href="{{route('product.create')}}" class="btn btn-primary"> Add product</a> --}}
    <table class=" table table-light" style="width: 100%">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Catagory name</th>
                <th scope="col">Category description</th>
                <th scope="col">image</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($category as $key => $data)
                <tr>
                    <th scope="row">{{ $key + 1 }}</th>
                    <td>{{ $data->Cname }} </td>
                    <td>{{ $data->Cdescription }} </td>
                    <td><img src="{{ url('uploads/uploads/category/' . $data->Cimage) }}" style="border-radius:4px"
                            width="100px" alt="Category image"></td>
                    <td>
                        <a href="{{ route('product.category.update.view', $data->id) }}" class="btn btn-info">Update</a>
                        {{-- <div class="model model-danger fade" id="delete" tabindex="-1" role="dialog"
                            aria-labelledby="myModellabel">
                            <div class="model-dialog" role="document">
                                <div class="model-content">
                                    <div class="model-header">
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-label="close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="model-title text-center" id="myModellabel">Delete Confirmation</h4>
                                    </div>
                                    <form action="" method="post">
                                        {{ method_field('patch') }}
                                        {{ csrf_field() }}
                                        <div class="modal-body">
                                            <p class="text-center">
                                                Are you sure you wand to delete this.</n>
                                                if you delete this it will delete this category
                                                product also.
                                            </p>

                                        </div>
                                        <div class="model-footer">
                                            <button type="button" class="btn btn-success">Cancel</button>
                                            <button type="button" class="btn btn-warning">Delete</button>

                                        </div>
                                    </form>

                                </div>

                            </div>

                        </div> --}}

                        <a href="{{ route('category.delete', $data->id) }}" class="btn btn-success">Delete</a>
                        {{-- <a href="{{route('product.category.delete', $data->Cid)}}" class="btn btn-danger">Delete</a> --}}
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>



@endsection
