@extends('layouts.main.app')

@section('content')

<div class="card">
    <div class="card-header">
        <h5>Product Details</h5>
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
        <form action="{{ route('product.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col">
                    <div class="row mb-3">
                        <label for="productname" class="col-sm-3 col-form-label">Product Name</label>
                        <div class="col-sm-9">
                            <input type="text" name="product_name" class="form-control" id="productname">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="productcode" class="col-sm-3 col-form-label">Product Code</label>
                        <div class="col-sm-9">
                            <input type="text" name="product_code" class="form-control" id="productcode" placeholder="(Required)">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="category" class="col-sm-3 col-form-label">Category</label>
                        <div class="col-sm-9">
                            <input type="text" name="category" class="form-control" id="category" placeholder="(Required)">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="supplier" class="col-sm-3 col-form-label">Supplier</label>
                        <div class="col-sm-9">
                            <!-- <input type="text" name="supplier" class="form-control" id="supplier"> -->
                            <div class="input-group mb-3" class="form-group">
                                <select class="form-select" id="ridername" name="supplier_id">
                                    @foreach ($suppliers as $supplier)
                                    <option value=" {{ $supplier->id }} "> {{ $supplier -> company}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="quantityperunit" class="col-sm-3 col-form-label">Quantity Per Unit</label>
                        <div class="col-sm-9">
                            <input type="text" name="quantity_per_unit" class="form-control" id="quantityperunit" placeholder="(Required)">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="description" class="col-sm-3 col-form-label">Description</label>
                        <div class="col-sm-9">
                            <input type="text" name="description" class="form-control" id="description">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="standardcost" class="col-sm-3 col-form-label">Standard Cost</label>
                        <div class="col-sm-9">
                            <input type="text" name="standard_cost" class="form-control" id="standardcost" placeholder="RM0.00">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="listprice" class="col-sm-3 col-form-label">List Price</label>
                        <div class="col-sm-9">
                            <input type="text" name="list_price" class="form-control" id="listprice" placeholder="RM0.00">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="reorderlevel" class="col-sm-3 col-form-label">Reorder Level</label>
                        <div class="col-sm-9">
                            <input type="text" name="reorder_level" class="form-control" id="reorderlevel" placeholder="(Required)">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="targetlevel" class="col-sm-3 col-form-label">Target Level</label>
                        <div class="col-sm-9">
                            <input type="text" name="target_level" class="form-control" id="targetlevel" placeholder="(Required)">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="targetlevel" class="col-sm-3 col-form-label">Default Reorder Quantity</label>
                        <div class="col-sm-9">
                            <input type="text" name="default_reorder" class="form-control" id="defaultreorder" placeholder="(Required)">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="targetlevel" class="col-sm-3 col-form-label">Discontinued</label>
                        <div class="col-sm-9">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="discontinued" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault"></label>
                                </input>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary"> Save</button>
                    <a href=" {{ route('product.index') }}" class="btn btn-secondary">Cancel</a>
                </div>
        </form>
    </div>

</div>
@endsection