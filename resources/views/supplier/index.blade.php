@extends('layouts.main.app')

@section('content')

<div class="card">
    <div class="card-header">
        <h3>Product List</h3>
        <div class="row">
            <div class="col">
                <a href="{{ route('supplier.create') }}" class="btn btn-primary"> Add Supplier</a>
                <!-- <a href="" class="btn btn-primary"> Collect Data via E-mail</a>
                <a href="" class="btn btn-primary"> Add From Outlook</a> -->
                <a href="" class="btn btn-primary"> E-mail List</a>
            </div>
            <div class="col d-flex justify-content-end">
                <a href=" {{ route('home') }} " class="btn btn-secondary">Home</a>
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
                    <th scope="col"> Id</th>
                    <th scope="col"> Contact Name</th>
                    <th scope="col"> Company</th>
                    <th scope="col"> E-mail</th>
                    <th scope="col"> Mobile Phone</th>
                    <th scope="col" width="200px"> Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach( $suppliers as $supplier)
                <tr>
                    <td> {{ $supplier -> id}}</td>
                    <td> {{ $supplier -> contact_name}}</td>
                    <td> {{ $supplier -> company_name}}</td>
                    <td> {{ $supplier -> email}}</td>
                    <td> {{ $supplier -> phone}}</td>
                    <td>
                        <form action="#" method="POST">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a class="btn btn-primary" href="#" role="button">Update</a>
                                <!-- <a class="btn btn-info" href="#" role="button">View</a> -->
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