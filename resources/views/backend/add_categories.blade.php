@extends('partials.backend.backend')
@section('title', 'categories')
@section('content')
    <div class="col-md-10">
        <div class="card">
            <form action="{{route('categoriesAdd')}}" enctype="multipart/form-data" method="post">
                @csrf
                     <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" id="formGroupExampleInput"
                        placeholder="Name">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Product_id</label>
                    <input type="text" class="form-control" name="name" id="formGroupExampleInput"
                        placeholder="product_id">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Title</label>
                    <input type="text" class="form-control" name="title" id="formGroupExampleInput"
                        placeholder="Title">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Image</label>
                    <input type="text" class="form-control" name="image" id="formGroupExampleInput"
                        placeholder="Image">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Description</label>
                    <input type="text" class="form-control" name="description" id="formGroupExampleInput"
                        placeholder="description">
                </div>


                <button type="submit" class="btn btn-primary">Add Categories</button>

            </form>
        </div>
    </div>
@endsection
