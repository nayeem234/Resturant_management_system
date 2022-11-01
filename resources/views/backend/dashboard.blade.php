@extends('partials.backend.backend')
@section('title','dashboard')
@section('content')

<div class="col-md-10">
        <a href="{{ url('newAdd') }}">
            <button type="button" id="button" class="btn btn-primary">Add Order</button>
        </a>

<table class="table" id="DataTable">
            <thead>
                <tr>
                    <th scope="col">id</th>
                     <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Address</th>
                    <th scope="col">Action</th>


                </tr>
            </thead>
            <tbody>
                @foreach ($data as $key => $orders)
                    <tr>
                        <th scope="row">{{ $key + 1 }}</th>
                        <td>{{ $orders->name }}</td>
                        <td>
                            {{ $orders->price }}
                        </td>
                        <td>
                            {{ $orders->mobile }}
                        </td>
                        <td>
                            {{ $orders->quantity }}
                        </td>
                        <td>
                            {{ $orders->address }}
                        </td>
                        <td>
                            {{-- <button type="button" class="btn btn-primary">View</button> --}}
                            <a class="editButton" data-id="{{ $orders->id }}" role="button"><button type="button"
                                    class="btn btn-warning">edit</button></a>
                            <a href="{{ url('deleteOrder/' . $orders->id) }}"><button type="button"
                                    class="btn btn-danger">Delete</button></a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
@endsection
