@extends('layouts.app')

@section('content')
    <h1>Customers Page</h1>
    <hr />
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Index</th>
                <th>Name</th>
                <th>Address</th>
                <th>Designation</th>
                <th>Age</th>
                <th>Modification</th>
                <th>Delete Data</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($customers as $customer)
                <tr>
                    <td>{{$customer->id}}</td>
                    <td>{{$customer->name}}</td>
                    <td>{{$customer->address}}</td>
                    <td>{{$customer->designation}}</td>
                    <td>{{$customer->age}}</td>
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