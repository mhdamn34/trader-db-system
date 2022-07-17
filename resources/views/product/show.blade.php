@extends('layouts.main.app')

@section('content')

<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h5 class="mt-5 mb-3">View Record</h5>

                    <div class="form-group">
                        <label>Product Name : </label>
                        <p><b>{{ $product->product_name }}</b></p>
                    </div>
                    <div class="form-group">
                        <label>Product Code :</label>
                        <p><b>{{ $product -> product_code }}</b></p>
                    </div>
                    <div class="form-group">
                        <label>Category :</label>
                        <p><b>{{ $product -> category }}</b></p>
                    </div>
                    <div class="form-group">
                        <label>Supplier :</label>
                        <p><b>{{ $product -> supplier_id }}</b></p>
                    </div>
                    <div class="form-group">
                        <label>Standard Cost :</label>
                        <p><b>{{ $product -> standard_cost }}</b></p>
                    </div>
                    <div class="form-group">
                        <label>List Price :</label>
                        <p><b>{{ $product -> list_price }}</b></p>
                    </div>
                    <div class="form-group">
                        <label>Reorder Level :</label>
                        <p><b>{{ $product -> reorder_level }}</b></p>
                    </div>
                    <div class="form-group">
                        <label>Target Level :</label>
                        <p><b>{{ $product -> target_level }}</b></p>
                    </div>
                    <div class="form-group">
                        <label>Discontinued :</label>
                        <p><b>{{ $product -> discontinued }}</b></p>
                    </div>

                   
                    
                    <p><a href="{{ route('product.index') }}" class="btn btn-primary">Back</a></p>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>

@endsection