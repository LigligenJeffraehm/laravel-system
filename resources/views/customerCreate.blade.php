@extends('masterLayout')

@section('title', 'New Customer')

@section('content')
    <div class="container">
        <div class="col-md-8">
            @csrf
            <form action = "{{route('customers.store')}}" method="post">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" name="customerName">
            </div>
            <div class="form-group">
                <label>Address</label>
                <input type="text" class="form-control" name = "customerAddress">
            </div>
            <div class="form-group">
                <label>Number</label>
                <input type="text" class="form-control" name = "contact#">
            </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection