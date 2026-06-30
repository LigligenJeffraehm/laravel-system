
@extends('masterLayout')

@section('title', 'Product List')

@section('content')
<a href="{{route('orders.create')}}" class="btn btn-primary">New Order</a>

<div class="container">
    <div class="row">
    <div class="col-md-8">
        <h2>Order</h2>
        <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Customer</th>
                <th scope="col">Product</th>
                <th scope="col">Quantity</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>

            <tr>
            @foreach($orders as $order)
                    <td>{{$order->customerName}}</td>
                    <td>{{$order->productName}}</td>
                    <td>{{$order->Quantity}}</td>
            <td>
                
                <form action="{{route('orders.destroy', $order->id)}}" method = "post">
                        <a href="{{route('orders.edit', $order->id)}}" class="btn btn-warning">Edit</a>
                                @csrf
                                @method('DELETE')
                    <button type = "submit" class = "btn btn-danger">Delete</button>
                </form>
            </td>
            @endforeach
        
            </tr>
        </tbody>
        </table>
    </div>
    </div>
        </div>
        
</div>
@endsection