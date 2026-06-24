
@extends('masterLayout')

@section('title', 'Product List')

@section('content')
<a href="{{route('products.create')}}" class="btn btn-primary">New Product</a>

<div class="container">
    <div class="row">
    <div class="col-md-8">
        <h2>Menu</h2>
        <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Category</th>
                <th scope="col">Price</th>
                <th scope="col">Availability</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->productName }}</td>
                    <td>{{$product->categoryName}}</td>
                    <td>{{ $product->price }}</td>
                    @if($product->availability == 1)
                        <td>Available</td>
                    @else
                        <td>Not available</td>
                    @endif
                        <td>
                        <form action="{{route('products.destroy', $product->id)}}" method = "post">
                        <a href="{{route('products.edit', $product->id)}}" class="btn btn-warning">Edit</a>
                            
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