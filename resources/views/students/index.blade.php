@extends('layout.master')

@section('content')
    <div class="row">
        <div class="col-12 col-xl-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Students</h5>
                    <a href="{{ route('students.view') }}" class="btn btn-info">Add New</a>
                </div>
                <table class="table">
                    <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Phone Number</th>
                        <th>Semester</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($students as $stud)
                        <tr>
                            <td>{{ @$stud->first_name }}</td>
                            <td>{{ @$stud->last_name }}</td>
                            <td>{{ @$stud->email }}</td>
                            <td>{{ @$stud->address ?? 'N/A'}}</td>
                            <td>{{ @$stud->phone_number }}</td>
                            <td>{{ @$stud->semester }}</td>
                            <td class="table-action">
                                <a href="#"><i class="align-middle" data-feather="edit-2"></i></a>
                                <a href="#"><i class="align-middle" data-feather="trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
