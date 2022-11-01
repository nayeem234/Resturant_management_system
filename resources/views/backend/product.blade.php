@extends('partials.backend.backend')
@section('title', 'product')
@section('content')
    <div class="col-md-10">
        <a href="{{ route('productAdd') }}">
            <button type="button" id="button" class="btn btn-primary">Add Product</button>
        </a>

        <table class="table" id="DataTable">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Title</th>
                    <!--  <th scope="col">Image</th>-->
                    <th scope="col">Price</th>
                    <th scope="col">Quantity</th>

                    <th scope="col">Action</th>


                </tr>
            </thead>
            <tbody>
                @foreach ($data as $key => $product)
                    <tr>
                        <th scope="row">{{ $key + 1 }}</th>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->title }}</td>
                        <!-- <td>{{ $product->image }}</td>-->
                        <td>
                            {{ $product->price }}
                        </td>


                        <td>
                            {{ $product->quantity }}
                        </td>

                        <td>
                            {{-- <button type="button" class="btn btn-primary">View</button> --}}
                            <a class="editButton" data-id="{{ $product->id }}" role="button"><button type="button"
                                    class="btn btn-warning">edit</button></a>
                            <a href="{{ url('deleteProduct/' . $product->id) }}"><button type="buttoon"
                                    class="btn btn-danger">Delete</button></a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>

        <div class="modal fade" id="editSports" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Edit Product

                        </h5>
                    </div>
                    <div class="modal-body">
                        <form action="{{ url('editProduct') }}" method="post">
                            @csrf
                            <input type="hidden" value="" id="editId" name="editId">

                            <div class="form-group">
                                <label for="title">Name</label>
                                <input type="text" class="form-control" id="title" name="name"
                                    placeholder="Name">

                            </div>
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" id="title" name="title"
                                    placeholder="Title">

                            </div>
                            <br>
                            <div class="form-group">
                                <label for="price">Price</label>
                                <input type="number" class="form-control" id="price" name="price"
                                    placeholder="Price">

                            </div>
                            <div class="form-group">
                                <label for="quantity">Quantity</label>
                                <input type="number" class="form-control" id="quantity" name="quantity"
                                    placeholder="Quantity">

                            </div>
                            <br>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" id="closeBtn">Cancel</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    @endsection

