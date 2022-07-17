@extends('layouts.main.app')

@section('content')

<div class="card">
    <div class="card-header">
        <h3>Employee details</h3>

        <div class="row">
            <div class="col d-flex justify-content-end">
                <a href=" {{ route('employees.employeesHome') }} " class="btn btn-secondary"> Back</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col"> Id</th>
                    <th scope="col"> Company</th>
                    <th scope="col"> First Name</th>
                    <th scope="col"> Last Name</th>
                    <th scope="col"> E-mail Address</th>
                    <th scope="col"> Businees Phone</th>
                    <th scope="col"> Job Title</th>
                    <th scope="col"> Address</th>
                    <th scope="col"> Web Page</th>
                    <th scope="col"> Notes</th>
                    
                </tr>
            </thead>

            <tbody>
                
                <tr>
                    <td> {{ $employee -> id}}</td>
                    <td> {{ $employee -> company}}</td>
                    <td> {{ $employee -> first_name}}</td>
                    <td> {{ $employee -> last_name}} </td>
                    <td> {{ $employee -> email_address}}</td>
                    <td> {{ $employee -> business_phone}}</td>
                    <td> {{ $employee -> job_title}}</td>
                    <td> {{ $employee -> address}}{{ $employee -> city}}{{ $employee -> state}}
                         {{ $employee -> postal_code}} {{ $employee -> country}}
                    </td>
                    <td> {{ $employee -> web_page}}</td>
                    <td> {{ $employee -> notes}}</td>
                </tr>
              
            </tbody>
        </table>
    </div>
</div>

@endsection