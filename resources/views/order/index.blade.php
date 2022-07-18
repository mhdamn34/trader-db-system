@extends('layouts.main.app')

@section('content')

<div class="card">
    <div class="card-header">
        <h3>Order List</h3>

        <div class="row">
            <div class="col">
                <a href="{{ route('order.create') }}" class="btn btn-primary"> New Order</a>
            </div>
            <div class="col">
                <a href="{{ route('order.edit') }}" class="btn btn-primary"> Manage Order</a>
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
            <thead class="table-primary">
                <tr>
                    <th scope="col"> No</th>
                    <th scope="col"> Order name</th>
                    <th scope="col"> Order Date</th>
                    <th scope="col"> Shipped Date</th>
                    <th scope="col"> Shiping Fee </th>
                    <th scope="col"> Notes</th>
                    <th scope="col" width="200px"> Action </th>
                </tr>
            </thead>
            <tbody>
                @foreach($orders as $order)
                    <tr>
                        <td> {{ $loop -> iteration }}</td>
                        <td>{{ $order -> order_name }}</td>
                        <td>{{ $order->order_date }}</td>
                        <td>{{ $order->shipped_date }}</td>
                        <td>${{ $order->shipping_fee }}</td>
                        <td>{{ $order->notes }}</td>
                        <td>
                            <form action="#" method="POST">
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <!-- <a class="btn btn-primary" href="# " role="button">Update</a> -->
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