@extends('masterLayout')

@section('title', 'New Order')

@section('content')
    <div class="container">
        <div class="col-md-8">
            <form action="{{ route('orders.store') }}" method="post">
                @csrf
                
                <div class="form-group">
                    <label>Product</label>
                    <select name="product_id" class="form-control" required>
                        <option value="">-- Select Product --</option>
                        @foreach($products as $product)
                            <option value="{{ $product->id }}">{{ $product->productName }}</option>
                        @endforeach
                    </select>
                </div>
                
                <div class="form-group">
                    <label>Customer</label>
                    <select name="customer_id" class="form-control" required>
                        <option value="">-- Select Customer --</option>
                        @foreach($customers as $customer)
                            <option value="{{ $customer->id }}">{{ $customer->customerName }}</option>
                        @endforeach
                    </select>
                </div>
                
                <div class="form-group">
                    <label>Quantity</label>
                    <input type="number" name="Quantity" class="form-control" min="1" required>
                </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection