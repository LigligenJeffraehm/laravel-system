@extends('masterLayout')

@section('title', 'New Category')

@section('content')
    <div class="container">
        <div class="col-md-8">
            @csrf
            <form action = "{{route('categories.store')}}" method="post">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" name="categoryName">
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