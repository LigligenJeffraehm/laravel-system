@extends('masterLayout')

@section('title', 'Edit Customer')

@section('content')
    <div class="container">
        <div class="col-md-8">
            <form action = "{{route('customers.update', $customer['id'])}}" method="post">
            @csrf 
            @method('PUT')
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" name="customerName" value="{{$customer['customerName']}}">
            </div>
            <div class="form-group">
                <label>Address</label>
                <input type="text" class="form-control" name = "customerAddress" value = "{{$customer['customerAddress']}}">
            </div>
            <div class="form-group">
                <label>Contact Number</label>
                <input type="text" class="form-control" name = "contact#" value = "{{$customer['contact#']}}">
            </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection