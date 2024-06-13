<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer</title>
    <link rel="stylesheet" href="{{ url('assets/bootstrap.css') }}">
</head>

<body>
    <div class="container">
        <h1>Customers Page</h1>
        <hr />
        <table class="table table-hover">
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
                            <a href="{{route('customers.modify-customer',['customer'=>$customer])}}" class="btn btn-warning btn-sm">Update</a>
                        </td>
                        <td>
                            <a href="#" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>