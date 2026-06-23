@extends('masterLayout')

@section('title', 'New Product')

@section('content')
    <div class="container">
        <div class="col-md-8">
            <form action = "{{route('products.store')}}" method="post">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" name="productName">
            </div>
            <div class="form-group">
                <label>Price</label>
                <input type="text" class="form-control" name = "price">
            </div>
            <div class="form-group">
                <label>Availability</label>
                <select name="availability" class="form-control">
                    <option selected>--Choose--</option>
                    <option value=1>Available</option>
                    <option value=0>Not Available</option>
                </select>
            </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    
@endsection