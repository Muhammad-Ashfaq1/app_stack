@extends('layout.master')
@section('content')
    <div class="col-12 col-xl-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Basic form</h5>
                <h6 class="card-subtitle text-muted">Default Bootstrap form layout.</h6>
            </div>
            <div class="card-body">
                <form action="{{ route('students.add') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label class="form-label">First Name</label>
                        <input type="text" name="first_name" class="form-control" placeholder="First Name" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Last Name</label>
                        <input type="text" name="last_name" class="form-control" placeholder="Last Name">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Email</label>
                        <input class="form-control" name="email" type="email" placeholder="Email" >
                    </div>
                    <div class="form-group">
                        <label class="form-label">Address</label>
                        <input class="form-control" name="address" type="text" placeholder="Address" >
                    </div>
                    <div class="form-group">
                        <label class="form-label">Phone Number</label>
                        <input type="number" name="phone_number" placeholder="enter phone number">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Semester</label>
                        <input type="number" name="semester" placeholder="enter semester">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
