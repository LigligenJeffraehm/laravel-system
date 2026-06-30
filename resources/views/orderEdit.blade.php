@extends('masterLayout')

@section('title', 'New Product')

@section('content')
    <div class="container">
        <div class="col-md-8">
            <form action = "{{route('orders.update', 'order->order_id')}}" method="post">

            @csrf 
            @method('PUT')
            
            <div class="form-group">
                <label>Customer</label>
                <select name="customer_id" id="" class="form-group">
                    @foreach($customers as $customer)
                        <option value="{{$customer->customer_id}}">{{$customer->customerName}}</option>
                    @endforeach
                </select>
            </div>
            
            <div class="form-group">
                <label>Product</label>
                <select name="product_id" id="" class="form-group">
                    @foreach($products as $product)
                        <option value="{{$product->product_id}}">{{$product->productName}}</option>
                    @endforeach
                </select>
                

            </div>
            <div class="form-group">
                <label >Quantity</label>
                <input type="text" name = "Quantity" value = "{{$order->Quantity}}">
            </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection