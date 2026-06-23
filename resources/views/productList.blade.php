
@extends('masterLayout')

@section('title', 'Product List')

@section('content')
<a href="{{route('products.create')}}" class="btn btn-primary">New Product</a>

<div class="container">
    <div class="row">
    <div class="col-md-6">
        <h2>Menu</h2>
        <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Availability</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product['productName'] }}</td>
                    <td>{{ $product['price'] }}</td>
                    @if($product['availability'] == 1)
                        <td>Available</td>
                    @else
                        <td>Not available</td>
                    @endif
                        <td>
                        <a href="{{route('products.edit', $product->id)}}" class="btn btn-warning">Edit</a>
                        </td>
                </tr>
                
            @endforeach
        </tbody>
        </table>
    </div>
    <div class="col-md-6">
        @csrf
        
    </div>
    </div>
        </div>
        
</div>
@endsection