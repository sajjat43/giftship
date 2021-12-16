@extends('master')
@section("content")
@if(session()->has('success'))
    <p class="alert alert-success">
      {{session()->get('success')}}
    </p>
    @endif

    @if ($errors->any())
              <div class="alert alert-danger">
                <ul>
                  @foreach ($errors->all() as $error)
                    <li>
                      {{$error}}
                    </li>
                  @endforeach
                </ul>
              </div>
  @endif
<a href="{{route('product.create')}}" class="btn btn-primary"> Add product</a>
<table class=" table table-light" style="width: 100%">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">name</th>
        <th scope="col">description</th>
        <th scope="col">price</th>
        <th scope="col">image</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($product as $key=>$data )
        <tr>
            <th scope="row">{{$key+1}}</th>
            <td>{{$data->name}} </td>
            <td>{{$data->description}} </td>
            <td>{{$data->price}} </td>
            <td><img src="{{url('/uploads/uploads/product/'.$data->image)}}" style="border-radius:4px" width="100px" alt="product image"></td>
            <td>
            <a href="{{route('product.view.details', $data->id)}}" class="btn btn-info">View</a>
            <a href="" class="btn btn-success">Update</a>
            <a href="{{route('product.delete', $data->id)}}" class="btn btn-danger">Delete</a>
            </td>
          </tr>
        @endforeach

    </tbody>
  </table>



@endsection
