@extends('layouts.main.app')

@section('content')

<div class="card">
    <div class="card-header">
        <h3>Customers Menu</h3>

        <div class="row">
            <div class="col d-flex justify-content-end">
                <a href=" {{ route('customer.index') }} " class="btn btn-secondary"> Back</a>
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
                    <td> {{ $customer -> id}}</td>
                    <td> {{ $customer -> company}}</td>
                    <td> {{ $customer -> first_name}}</td>
                    <td> {{ $customer -> last_name}} </td>
                    <td> {{ $customer -> email_address}}</td>
                    <td> {{ $customer -> business_phone}}</td>
                    <td> {{ $customer -> job_title}}</td>
                    <td> {{ $customer -> address}},{{ $customer -> city}},{{ $customer -> state}},
                         {{ $customer -> postal_code}}, {{ $customer -> country}}
                    </td>
                    <td> {{ $customer -> web_page}}</td>
                    <td> {{ $customer -> notes}}</td>
                </tr>
                
            </tbody>
        </table>
    </div>
</div>

@endsection