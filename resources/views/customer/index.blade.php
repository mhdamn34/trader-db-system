@extends('layouts.main.app')

@section('content')

<div class="card">
    <div class="card-header">
        <h3>Customers Menu</h3>

        <div class="row">
            <div class="col">
                <a href="{{ route('customer.create') }}" class="btn btn-primary"> New Customer</a>
            </div>
            <div class="col d-flex justify-content-end">
                <a href="#" class="btn btn-secondary">Home</a>
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
                    <th scope="col"> No</th>
                    <th scope="col"> Name</th>
                    <th scope="col"> Company Name</th>
                    <th scope="col"> E-mail</th>
                    <th scope="col"> Mobile Phone</th>
                    <th scope="col"> Notes</th>
                    <th scope="col" width="200px"> Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($customer as $cust)
                    <tr>
                        <td> {{ $loop -> iteration }}</td>
                        <td>{{ $cust->first_name }} {{ $cust->last_name }}</td>
                        <td>{{ $cust->company_name }}</td>
                        <td>{{ $cust->email }}</td>
                        <td>{{ $cust->phone }}</td>
                        <td>{{ $cust->notes }}</td>
                        <td>
                            <form action="{{ route('customer.delete',['customer_id' => $cust->id]) }}" method="POST">
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a class="btn btn-primary" href="{{ route('customer.edit', ['customer_id' => $cust->id]) }}" role="button">Update</a>
                                    <!-- <a class="btn btn-info" href="#" role="button">View</a> -->
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" value="Delete" name="action">Delete</button>
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