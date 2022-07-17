@extends('layouts.main.app')

@section('content')

<div class="card">
    <div class="card-header">
        <h3>Supplier List</h3>
        <div class="row">
            <div class="col d-flex justify-content-end">
                <a href=" {{ route('supplier.index') }} " class="btn btn-secondary">Back</a>
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
                    <th scope="col" width="200px"> Notes</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td> {{ $supplier -> id}}</td>
                    <td> {{ $supplier -> company}}</td>
                    <td> {{ $supplier -> first_name}}</td>
                    <td> {{ $supplier -> last_name}} </td>
                    <td> {{ $supplier -> email_address}}</td>
                    <td> {{ $supplier -> business_phone}}</td>
                    <td> {{ $supplier -> job_title}}</td>
                    <td> {{ $supplier -> address}},{{ $supplier -> city}},{{ $supplier -> state}},
                        {{ $supplier -> postal_code}}, {{ $supplier -> country}}
                    </td>
                    <td> {{ $supplier -> web_page}}</td>
                    <td> {{ $supplier -> notes}}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection