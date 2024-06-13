@extends('layouts.app')

@section('content')
    <h1>Customers Page</h1>
    <hr />
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Index</th>
                <th>Name</th>
                <th class="d-none d-md-table-cell">Address</th>
                <th class="d-none d-md-table-cell">Designation</th>
                <th class="d-none d-md-table-cell">Age</th>
                <th>Modification</th>
                <th>Delete Data</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($customers as $customer)
                <tr>
                    <td>{{$customer->id}}</td>
                    <td>{{$customer->name}}</td>
                    <td class="d-none d-md-table-cell">{{$customer->address}}</td>
                    <td class="d-none d-md-table-cell">{{$customer->designation}}</td>
                    <td class="d-none d-md-table-cell">{{$customer->age}}</td>
                    <td>
                        <a href="{{route('customers.modify-customer', ['customer' => $customer])}}"
                            class="btn btn-warning btn-sm">Update</a>
                    </td>
                    <td>
                        <a href="{{route('customers.delete-customer', ['customer' => $customer])}}"
                            class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
