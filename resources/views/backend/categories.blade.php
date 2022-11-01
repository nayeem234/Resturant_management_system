@extends('partials.backend.backend')

@section('title','categories')

@section('content')

<div class="col-md-10">
    <a href="{{ url('categories1') }}">
        <button type="button" id="button" class="btn btn-primary">Add Categories</button>
    </a>


    <table class="table" id="Datatable">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">product_id</th>
                <th scope="col">Title</th>
                <th scope="col">Image</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>
            </tr>
        <tbody>
            @foreach ($data as $key => $categories)
                <tr>
                    <th scope="row">{{ $key + 1 }}</th>
                    <td>{{$categories->name}}</td>
                   <td>{{ $categories->product_id }}</td>
                    <td>{{ $categories->title }}</td>
                    <td>{{$categories->image}}</td>

                    <td>{{ $categories->address }}</td>
                    <td>
                        <a class="editcategories" data-id="{{ $categories->id }}"><button type="button"
                                class="btn btn-warning">edit</button></a>
                        <a href="{{ url('deletecategories/' . $categories->id) }}"><button type="button"
                                class="btn btn-danger">delete</button></a>
                    </td>
                </tr>
            @endforeach

        </tbody>

        </thead>
    </table>
</div>

@endsection
