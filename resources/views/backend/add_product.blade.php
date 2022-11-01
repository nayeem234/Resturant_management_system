@extends('partials.backend.backend')
@section('title', 'product')
@section('content')
    <div class="col-md-10">
        <div class="card">
            <form action="{{route('newAdd')}}" enctype="multipart/form-data" method="post">
                @csrf
                     <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" id="formGroupExampleInput"
                        placeholder="Name">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Title</label>
                    <input type="text" class="form-control" name="title" id="formGroupExampleInput"
                        placeholder="Title">
                </div>
               <!-- <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Image</label>
                    <input type="text" class="form-control" name="image" id="formGroupExampleInput"
                        placeholder="Image">
                </div>-->
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Price</label>
                    <input type="number" class="form-control" name="price" id="formGroupExampleInput"
                        placeholder="price">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Quantity</label>
                    <input type="quantity" class="form-control" name="quantity" id="formGroupExampleInput"  placeholder="quantity">
                </div>


                <button type="submit" class="btn btn-primary">Add Order</button>

            </form>
        </div>
    </div>
@endsection
