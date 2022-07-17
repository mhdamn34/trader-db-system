@extends('layouts.main.app')

@section('content')

<div class="card">
    <form action=" {{ route('product.edit', $product->id) }} " method="POST">
        <div class="card-header">
            <h4>Update Product Details</h4>

            @csrf
            @method('PATCH')
            <div class="row">
                <div class="col d-flex justify-content-end">
                    <a href=" {{ route('product.index') }}" class="btn btn-secondary"> Cancel</a>
                    <button type="submit" class="btn btn-primary"> Save </button>

                </div>
            </div>
        </div>
        <div class="card-body">
            @if ($errors -> any())

            <div class="alert alert-danger">
                <strong>Whoops! Errors </strong>
                <ul>
                    @foreach ($errors -> all() as $error)
                    <li> {{ $error }} </li>
                    @endforeach
                </ul>
            </div>
            @endif

            <div class="row">
                <div class="col">
                    <div class="row mb-3">
                        <label for="company" class="col-sm-3 col-form-label">Product Name</label>
                        <div class="col-sm-9">
                            <input type="text" name="product_name" class="form-control" value="{{ $product->product_name }}">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="company" class="col-sm-3 col-form-label">Product Code</label>
                        <div class="col-sm-9">
                            <input type="text" name="product_code" class="form-control" value="{{ $product->product_code }}">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="company" class="col-sm-3 col-form-label">Description</label>
                        <div class="col-sm-9">
                            <input type="text" name="description" class="form-control" value="{{ $product->description }}">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="company" class="col-sm-3 col-form-label">Standard Cost</label>
                        <div class="col-sm-9">
                            <input type="text" name="standard_cost" class="form-control" value="{{ $product->standard_cost }}">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="company" class="col-sm-3 col-form-label">List Price</label>
                        <div class="col-sm-9">
                            <input type="text" name="list_price" class="form-control" value="{{ $product->list_price }}">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="company" class="col-sm-3 col-form-label">Reorder Level</label>
                        <div class="col-sm-9">
                            <input type="text" name="reorder_level" class="form-control" value="{{ $product->reorder_level }}">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="company" class="col-sm-3 col-form-label">Target Level</label>
                        <div class="col-sm-9">
                            <input type="text" name="target_level" class="form-control" value="{{ $product->target_level }}">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="company" class="col-sm-3 col-form-label">Quantity per Unit</label>
                        <div class="col-sm-9">
                            <input type="text" name="quantity_per_unit" class="form-control" value="{{ $product->quantity_per_unit }}">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="company" class="col-sm-3 col-form-label">Category</label>
                        <div class="col-sm-9">
                            <input type="text" name="category" class="form-control" value="{{ $product->category }}">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="company" class="col-sm-3 col-form-label">Discontinued</label>
                        <div class="col-sm-9">
                            <input type="text" name="discontinued" class="form-control" value="{{ $product->discontinued }}">
                        </div>
                    </div>


                </div>
            </div>
    </form>

</div>


</div>

@endsection