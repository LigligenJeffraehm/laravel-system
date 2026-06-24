@extends('masterLayout')

@section('title', 'New Product')

@section('content')
    <div class="container">
        <div class="col-md-8">
            <form action = "{{route('categories.update', $category['id'])}}" method="post">
            @csrf 
            @method('PUT')
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" name="categoryName" value="{{$category['categoryName']}}">
            </div>
            <div class="form-group">
                <label>Price</label>
                <input type="text" class="form-control" name = "categoryDescription" value = "{{$category['categoryDescription']}}">
            </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection