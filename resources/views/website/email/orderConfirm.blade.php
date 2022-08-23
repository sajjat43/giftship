<h1>Your oder confirm</h1>

<h2>Your order List</h2>
<div class="d-flex justify-content-center row"id="printableArea">
    <div class="row">
        <div class="col-md-6">
                <h3 class="text-uppercase">name: {{ auth()->user()->name }}</h3>
            </div>
        </div>  
    {{-- <div class="col-md-8">
        <div class="p-3 bg-white rounded">
            <div class="row">
                <div class="col-md-6">
                </div>
            </div>
            <div class="mt-3">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">User Name</th>
                                <th scope="col">Total price</th>
                                <th scope="col">Date</th>
                                <th scope="col">Payment Status</th>
                                <th scope="col">Action</th>
                
                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($request as $key => $request)

                            <tr>
                                <th scope="row">{{ $key + 1 }}</th>
                                <td>{{ $request->user->name }}</td>
                
                                    <td>
                                        TK {{ $request->total }}
                                    </td>
                                    <td>
                                        {{$request->created_at}}
                                    </td>
                                    <td>
                                        {{ $request->payment_status }}
                                    </td>
                
                
                                
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            
        </div>
    </div> --}}
</div>