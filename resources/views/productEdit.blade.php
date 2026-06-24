@extends('masterLayout')

@section('title', 'New Product')

@section('content')
    <div class="container">
        <div class="col-md-8">
            <form action = "{{route('products.update', $product->id)}}" method="post">

            @csrf 
            @method('PUT')
            
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" name="productName" value="{{$product->productName}}">
            </div>
            
            <div class="form-group">
                <label>Price</label>
                <input type="text" class="form-control" name = "price" value = "{{$product->price}}">
            </div>
            
            <div class="form-group">
                <label>Category</label>
                    <select name="category_id" class="form-group">
                    @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->categoryName}}</option>
                    @endforeach
                    </select>
            </div>
            <div class="form-group">
                <label>Availability</label>
                <select name="availability" class="form-control">
                    @if($product->availability == 1)
                        <option value=1 selected>Available</option>
                        <option value=0>Not Available</option>
                    @else
                        <option value=1>Available</option>
                        <option value=0 selected>Not Available</option>
                    @endif
                </select>
            </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection