@extends('layouts.main.app')

@section('content')

<div class="card">
    <div class="card-header">
        <h5>Create New Order</h5>
        <div class="row">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="modal" data-bs-target="#exampleModal">E-mail</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('order.index') }}">Cancel</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <div class="card-body">
        @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form action=" {{ route('order.create') }} " method="POST">
            @csrf
            <h5>Details</h5>
            <div class="row">
                <div class="col">
                    <div class="row mb-3">
                        <label for="order_name" class="col-sm-3 col-form-label">Order Name</label>
                        <div class="col-sm-9">
                            <input type="text" name="order_name" class="form-control" id="order_name">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="status" class="col-sm-3 col-form-label">Status</label>
                        <div class="col-sm-9">
                            <select type="text" name="status" class="form-control" id="status">
                                @foreach($statusOrder as $s)
                                    <option value="{{ $s -> id }}">{{ $s->status }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="shipper" class="col-sm-3 col-form-label">Shipper</label>
                        <div class="col-sm-9">
                            <select type="text" name="shipper" class="form-control" id="shipper">
                                @foreach($shipper as $s)
                                    <option value="{{ $s->id }}">{{ $s->first_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="employee" class="col-sm-3 col-form-label">Employee</label>
                        <div class="col-sm-9">
                            <select type="text" name="employee" class="form-control" id="employee">
                                @foreach($employee as $e)
                                    <option value="{{ $e->id }}">{{ $e->first_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="customer" class="col-sm-3 col-form-label">Customer</label>
                        <div class="col-sm-9">
                            <select type="text" name="customer" class="form-control" id="customer">
                                @foreach($customer as $c)
                                    <option value="{{ $c->id }}">{{ $c->first_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <br>
                    <h5>Date</h5>
                    <div class="row mb-3">
                        <label for="order_date" class="col-sm-3 col-form-label">Order date</label>
                        <div class="col-sm-9">
                            <input type="date" name="order_date" class="form-control" id="order_date">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="shipped_date" class="col-sm-3 col-form-label">Shipped Date</label>
                        <div class="col-sm-9">
                            <input type="date" name="shipped_date" class="form-control" id="shipped_date">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="paid_date" class="col-sm-3 col-form-label">Paid Date</label>
                        <div class="col-sm-9">
                            <input type="date" name="paid_date" class="form-control" id="paid_date" required>
                        </div>
                    </div>
                    <h5>Address</h5>
                    <div class="row mb-3">
                        <label for="ship_name" class="col-sm-3 col-form-label">Ship Name</label>
                        <div class="col-sm-9">
                            <input type="text" name="ship_name" class="form-control" id="ship_name" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="address" class="col-sm-3 col-form-label">Ship Address</label>
                        <div class="col-sm-9">
                            <input type="text" name="address" class="form-control" id="address" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="city" class="col-sm-3 col-form-label">Ship City</label>
                        <div class="col-sm-9">
                            <input type="text" name="city" class="form-control" id="city" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="state" class="col-sm-3 col-form-label">Ship State</label>
                        <div class="col-sm-9">
                            <input type="text" name="state" class="form-control" id="state" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="postal_code" class="col-sm-3 col-form-label">Ship Postal Code</label>
                        <div class="col-sm-9">
                            <input type="text" name="postal_code" class="form-control" id="postal_code" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="country" class="col-sm-3 col-form-label">Country</label>
                        <div class="col-sm-8">
                            <input type="text" name="country" class="form-control" id="country" required>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="col">
                        <div class="row">
                            <div class="col" style="padding: 30px;">
                                <div class="row">
                                    <label for="fee" class="col-sm-4 col-form-label">Shipping Fee</label>
                                    <div class="col-sm-12">
                                        <input type="text" name="fee" class="form-control" id="fee">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="input-group">
                        <label for="notes" class="col-sm-2 col-form-label" >Notes</label>
                        <textarea type="text" name="notes" class="form-control" aria-label="With textarea" style="height: 200px;" required></textarea>
                    </div>
                </div>

            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary" value="Save" name="action"> Save</button>
            </div>
        </form>
    </div>

</div>
@endsection