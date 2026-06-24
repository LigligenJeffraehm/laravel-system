@extends('masterLayout')

@section('title', 'New Order')

@section('content')
    <div class="container">
        <div class="col-md-8">
            @csrf
            <form action = "{{route('orders.store')}}" method="post">
            <div class="form-group">
                <label>Product</label>
                <select name="" id="">
                    @foreach($products as $product)
                    <option value="order->product_id">{{order->productName}}</option>
                </select>
                <select name="order->customer_id" id="">{{order->customerName}}</select>

            </div>
            <div class="form-group">
                <label>Description</label>
                <textarea type="text" class="form-control" name = "categoryDescription"></textarea>
            </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection