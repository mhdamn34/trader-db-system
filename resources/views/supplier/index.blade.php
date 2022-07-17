@extends('layouts.main.app')

@section('content')

<div class="card">
    <div class="card-header">
        <h3>Supplier List</h3>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('supplier.create') }}">New Supplier</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href=" ">Collect Data via E-mail</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href=" ">Add From Outlook</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href=" ">E-mail List</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href=" {{ url('/') }} ">Home</a>
                        </li>
                    </ul>
                </div>
            </nav>
        <!-- <div class="row">
            <div class="col">
                <a href="{{ route('supplier.create') }}" class="btn btn-primary">New Supplier</a>
                <a href="" class="btn btn-primary"> Collect Data via E-mail</a>
                <a href="" class="btn btn-primary"> Add From Outlook</a>
                <a href="" class="btn btn-primary"> E-mail List</a>
            </div>
            <div class="col d-flex justify-content-end">
                <a href=" {{ url('/') }} " class="btn btn-secondary">Home</a>
            </div>
        </div> -->
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
                    <th scope="col"> Id</th>
                    <th scope="col"> Company</th>
                    <th scope="col"> Name</th>
                    <th scope="col"> E-mail</th>
                    <th scope="col"> Mobile Phone</th>
                    <th scope="col"> Job Title</th>
                    <th scope="col" width="200px"> Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach( $suppliers as $supplier)
                <tr>
                    <td> {{ $supplier -> id}}</td>
                    <td> {{ $supplier -> company}}</td>
                    <td> {{ $supplier -> first_name}} {{ $supplier -> last_name}}</td>
                    <td> {{ $supplier -> email_address}}</td>
                    <td> {{ $supplier -> mobile_phone}}</td>
                    <td> {{ $supplier -> job_title}}</td>
                    <td>
                        <form action=" {{ route('supplier.destroy', $supplier->id) }}" method="POST">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a class="btn btn-primary" href=" {{ route('supplier.edit', $supplier->id) }} " role="button">Update</a>
                                <a class="btn btn-info" href=" {{ route('supplier.show', $supplier->id) }} " role="button">View</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </div>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection