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

<table class=" table table-light" style="width: 100%">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">name</th>
        <th scope="col">Email</th>
        <th scope="col">Mobile</th>
        <th scope="col">Gender</th>

        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($Employee as $key=>$data )
        <tr>
            <th scope="row">{{$key+1}}</th>
            <td>{{$data->name}} </td>
            <td>{{$data->email}} </td>
            <td>{{$data->mobile}} </td>
            <td>{{$data->gender}} </td>
             <td>
            <a href="" class="btn btn-info">View</a>
            <a href="" class="btn btn-success">Update</a>
            <a href="" class="btn btn-danger">Delete</a>
            </td>
          </tr>
        @endforeach

    </tbody>
  </table>



@endsection
