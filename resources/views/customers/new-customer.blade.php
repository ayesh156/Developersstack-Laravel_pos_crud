<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer</title>
    <link rel="stylesheet" href="{{ url('assets/bootstrap.css') }}">
</head>

<body>
    <form action="{{route('customers.add-customer')}}" method="POST">
        @csrf
        <div class="outer" style="margin:50px 0">
            <div class="container">
                <div class="row">
                    <div class="col-3">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" placeholder="samantha" name="name" id="name" />
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" placeholder="colombo" name="address" id="address"  />
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-group">
                            <label for="designation">Designation</label>
                            <input type="text" class="form-control" placeholder="co-worker" name="designation" id="designation" />
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-group">
                            <label for="age">Age</label>
                            <input type="number" class="form-control" placeholder="23" name="age" id="age"/>
                        </div>
                    </div>
                    <div class="col-12">
                        <br />
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary col-12">Save Customer</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>

</html>