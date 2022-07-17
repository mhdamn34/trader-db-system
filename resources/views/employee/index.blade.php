@extends('layouts.main.app')

@section('content')

<div class="card">
    <div class="card-header">
        <h3>Employee List</h3>

        <div class="row">
            <nav class="navbar navbar-expand navbar-light bg-light">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">New Employee <span class="sr-only"></span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Collect Data via E-mail</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Add From Outlook</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">E-mail List</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Reports</a>
                        </li>
                        <li class="nav-item active">
                            <div class="input-group mb-3">
                                <select class="form-select" id="reportID">
                                    <option selected> </option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div>
<br>
<div class="card">
    <table class="table table-bordered mt-3">
        <thead class="table-primary">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Company</th>
                <th scope="col">First Name</th>
                <!-- <th scope="col">Last Name</th> -->
                <th scope="col">E-mail Address</th>
                <th scope="col">Job Title</th>
                <!-- <th scope="col">Business Phone</th> -->
                <th scope="col">Home Phone</th>
                <th scope="col">Address</th>
                <th scope="col">City</th>
                <th scope="col"> Action</th>
            </tr>

        <tbody>
            @foreach($employees as $employee)
            <tr>
                <td> {{ $employee->id }} </td>
                <td> {{ $employee->company}}</td>
                <td> {{ $employee->first_name}} </td>
                <!-- <td> {{ $employee->last_name}}</td> -->
                <td> {{ $employee->email_address}}</td>
                <td> {{ $employee->job_title}}</td>
                <!-- <td> {{ $employee->business_phone}}</td> -->
                <td> {{ $employee->home_phone}}</td>
                <td> {{ $employee->address}}</td>
                <td> {{ $employee->city}}</td>
                <td>
                    <form action=" {{ route('employee.destroy', $employee->id) }}" method="POST">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a class="btn btn-primary" href=" {{ route('employee.edit', $employee->id) }} " role="button">Update</a>
                            <a class="btn btn-info" href=" {{ route('employee.show', $employee->id) }} " role="button">View</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </div>
                    </form>
                </td>
            </tr>
            @endforeach

            </thead>
        </tbody>
</div>

@endsection