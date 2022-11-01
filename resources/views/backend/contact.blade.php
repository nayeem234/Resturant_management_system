@extends('partials.backend.backend')
@section('title', 'contact')
@section('content')

    <div class="col-md-10">
        <a href="{{ url('contact1') }}">
            <button type="button" id="button" class="btn btn-primary">Add Contact</button>
        </a>


        <table class="table" id="Datatable">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Email</th>
                    <th scope="col">Contact Number</th>
                    <th scope="col">Address</th>
                    <th scope="col">Action</th>
                </tr>
            <tbody>
                @foreach ($data as $key => $contact)
                    <tr>
                        <th scope="row">{{ $key + 1 }}</th>
                        <td>{{ $contact->email }}</td>
                        <td>{{ $contact->contact_number }}</td>
                        <td>{{ $contact->address }}</td>
                        <td>
                            <a class="editcontact" data-id="{{ $contact->id }}"><button type="button"
                                    class="btn btn-warning">edit</button></a>
                            <a href="{{ url('deleteContact/' . $contact->id) }}"><button type="button"
                                    class="btn btn-danger">delete</button></a>
                        </td>
                    </tr>
                @endforeach

            </tbody>

            </thead>
        </table>
    </div>
@endsection
