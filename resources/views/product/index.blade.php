@extends('layouts.main.app')

@section('content')

<div class="card">
    <div class="card-header">
        <h3>Product List</h3>
        <div class="row">
            <div class="col">
                <a href="{{ url('/product/create') }}" class="btn btn-primary"> New Product</a>
                <a href="" class="btn btn-primary"> Collect Data via E-mail</a>
                <a href="" class="btn btn-primary"> Add From Outlook</a>
                <a href="" class="btn btn-primary"> E-mail List</a>
            </div>
            <div class="col d-flex justify-content-end">
                <a href=" {{ url('/') }} " class="btn btn-secondary">Home</a>
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
                    <th scope="col"> ID</th>
                    <th scope="col"> Product Name</th>
                    <th scope="col"> Product Code</th>
                    <th scope="col"> Category</th>
                    <th scope="col"> Supplier</th>
                    <th scope="col" width="200px"> Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach( $products as $product)
                <tr>
                    <td> {{ $product -> id}}</td>
                    <td> {{ $product -> product_name}}</td>
                    <td> {{ $product -> product_code}}</td>
                    <td> {{ $product -> category}}</td>
                    <td> {{ $product -> supplier_id}}</td>
                    <td>
                        <form action="{{ route('product.destroy', $product->id) }}" method="POST">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a class="btn btn-primary" href=" {{ route('product.edit', $product->id) }} " role="button">Update</a>
                                <a class="btn btn-info" href=" {{ route('product.show', $product->id) }} " role="button">View</a>
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