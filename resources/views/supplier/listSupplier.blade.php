@extends('layouts.main.app')

@section('content')

<div class="card">
    <div class="card-header">
        <h3>Supplier List</h3>

        <div class="row">
            <div class="col">
                <ul class="nav nav-pills">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href=" {{ url('/newSupplier') }} "> New Supplier</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"> Collect Data via E-mail</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"> Add From Outlook</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"> Email List</a>
                    </li>
                </ul>
            </div>
            <div class="col d-flex justify-content-end">
                <a href=" {{ url('/home') }} " class="btn btn-secondary"> Home</a>
            </div>
        </div>
    </div>

    <div class="card-body">


        @if ($message = Session::get('success'))
        <div class="alert alert-success">

            <p>{{ $message }}</p>

        </div>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col"> #</th>
                    <th scope="col"> Company</th>
                    <th scope="col"> First Name</th>
                    <th scope="col"> Last Name</th>
                    <th scope="col"> E-mail Address</th>
                    <th scope="col"> Bussiness Phone</th>
                    <th scope="col"> Job Title</th>
                </tr>
            </thead>


            <tbody>

                @foreach($suppliers as $supplier)

                <tr>
                    <td scope="row">{{ $supplier->id }} </td>
                    <td> {{ $supplier->Company}}</td>
                    <td> {{ $supplier->FirstName}} </td>
                    <td> {{ $supplier->LastName}}</td>
                    <td> {{ $supplier->EmailAddress}}</td>
                    <td> {{ $supplier->BussinessPhone}}</td>
                    <td> {{ $supplier->JobTitle}}</td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>


</div>


@endsection