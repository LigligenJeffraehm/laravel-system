
@extends('masterLayout')

@section('title', 'Category List')

@section('content')
<a href="{{route('categories.create')}}" class="btn btn-primary">New Category</a>

<div class="container">
    <div class="row">
    <div class="col-md-8">
        <h2>Category</h2>
        <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Category</th>
                <th scope="col">Description</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
                <tr>
                    <td>{{ $category['categoryName'] }}</td>
                    <td>{{ $category['categoryDescription'] }}</td>
                        <td>
                        <form action="{{route('categories.destroy', $category['id'])}}" method = "post">
                        <a href="{{route('categories.edit', $category['id'])}}" class="btn btn-warning">Edit</a>
                            
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