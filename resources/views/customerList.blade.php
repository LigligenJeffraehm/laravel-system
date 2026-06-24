
@extends('masterLayout')

@section('title', 'Customer List')

@section('content')
<a href="{{route('customers.create')}}" class="btn btn-primary">New Customer</a>

<div class="container">
    <div class="row">
    <div class="col-md-8">
        <h2>Customers</h2>
        <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Address</th>
                <th scope="col">Contact #</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($customers as $customer)
                <tr>
                    <td>{{ $customer['customerName'] }}</td>
                    <td>{{ $customer['customerAddress'] }}</td>
                    <td>{{$customer['contact#']}}</td>
                        <td>
                        <form action="{{route('customers.destroy', $customer['id'])}}" method = "post">
                        <a href="{{route('customers.edit', $customer['id'])}}" class="btn btn-warning">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type = "submit" class = "btn btn-danger">Delete</button>
                            </form>
                        </td>
                        
                </tr>
                
            @endforeach
        </tbody>
        </table>
    </div>
    </div>
        </div>
        
</div>
@endsection