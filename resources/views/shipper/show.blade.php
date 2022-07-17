@extends('layouts.main.app')

@section('content')

<div class="card">
    <div class="card-header">
        <h3>Shipper Menu</h3>

        <div class="row">
            <div class="col d-flex justify-content-end">
                <a href=" {{ route('shipper.index') }} " class="btn btn-secondary"> Back</a>
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
                    <td> {{ $shipper -> id}}</td>
                    <td> {{ $shipper -> company}}</td>
                    <td> {{ $shipper -> first_name}}</td>
                    <td> {{ $shipper -> last_name}} </td>
                    <td> {{ $shipper -> email_address}}</td>
                    <td> {{ $shipper -> business_phone}}</td>
                    <td> {{ $shipper -> job_title}}</td>
                    <td> {{ $shipper -> address}},{{ $shipper -> city}},{{ $shipper -> state}},
                         {{ $shipper -> postal_code}}, {{ $shipper -> country}}
                    </td>
                    <td> {{ $shipper -> web_page}}</td>
                    <td> {{ $shipper -> notes}}</td>
                </tr>
                
            </tbody>
        </table>
    </div>
</div>

@endsection