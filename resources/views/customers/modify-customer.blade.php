@extends('layouts.app')

@section('content')
<form action="{{route('customers.update-customer', ['customer' => $customer])}}" method="PUT">
    @csrf
    @method('put')
    <div class="outer" style="margin:50px 0">

        <div class="row">
            <div class="col-md-3 col-12">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" placeholder="samantha" name="name" id="name"
                        value="{{$customer->name}}" />
                </div>
            </div>
            <div class="col-md-3 col-12">
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" placeholder="colombo" name="address" id="address"
                        value="{{$customer->address}}" />
                </div>
            </div>
            <div class="col-md-3 col-12">
                <div class="form-group">
                    <label for="designation">Designation</label>
                    <input type="text" class="form-control" placeholder="co-worker" name="designation" id="designation"
                        value="{{$customer->designation}}" />
                </div>
            </div>
            <div class="col-md-3 col-12">
                <div class="form-group">
                    <label for="age">Age</label>
                    <input type="number" class="form-control" placeholder="23" name="age" id="age"
                        value="{{$customer->age}}" />
                </div>
            </div>
            <div class="col-12">
                <br />
                <div class="form-group">
                    <button type="submit" class="btn btn-success col-12">Update Customer</button>
                </div>
            </div>
        </div>
    </div>

</form>
@endsection