@extends('layouts.main.app')

@section('content')

<div class="card">
    <div class="card-header">
        <h3>Order # (New)</h3>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <a class="navbar-brand" href="#">Hidden brand</a>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Status :</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Create Invoice</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ">Ship Order</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ">Complete Order</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ">Delete Order</a>
                    </li>
                </ul>
                <form class="d-flex">

                    <a button class="btn btn-outline-success" href="{{ url('/orders') }} " type="submit">Close</a></button>
                </form>

            </div>
        </div>
    </nav>
    <nav>
        <div class="card">
            <div class="row">
                <div class="col">
                    <div class="mb-3 row">
                        <label for="customer" class="col-sm-5 col-form-label">Customer</label>
                        <div class="col-sm-7">


                            <div class="col">
                                <div class="input-group mb-3" class="form-group">

                                    <select class="form-select" id="company" name="customer_id">
                                        @foreach ($customers as $customer)
                                        <option value=" {{ $customer->id }} "> {{ $customer ->company}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="mb-3 row">
                        <label for="customer" class="col-sm-5 col-form-label">E-mail Address</label>
                        <div class="col-sm-7">
                            <input type="customer" class="form-control" id="customer">
                        </div>
                    </div>

                </div>

                <div class="col">
                    <div class="mb-3 row">
                        <label for="customer" class="col-sm-5 col-form-label">Salesperson</label>
                        <div class="col-sm-7">
                            <div class="col">
                                <div class="input-group mb-3" class="form-group">
                                    <select class="form-select" id="createdSelect">
                                        <option selected> </option>
                                        <option value="1">Andrew Cencin</option>
                                        <option value="2">Anne Hellung-Larsen</option>
                                        <option value="3">Jan Kotas</option>
                                        <option value="4">Laura Giussani</option>
                                        <option value="5">Mariya Sergienko</option>
                                        <option value="6">Michael Neiper</option>
                                        <option value="7">Nancy Freehafer</option>
                                        <option value="8">Robert Zare</option>
                                        <option value="9">Steven Thorpe</option>


                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="customer" class="col-sm-5 col-form-label">Order Date</label>
                        <div class="col-sm-7">
                            <input type="date" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </nav>


    <thead>
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Order Details</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Shipping Information</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Payment Information</a>
            </li>

        </ul>

    </thead>



</div>

<body>
    <div class="card">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>*</th>
                        <th>Product</th>
                        <th>Qty</th>
                        <th>Unit Price</th>
                        <th>Discount</th>
                        <th>Total Price</th>
                        <th>Status</th>

                    </tr>
                </thead>
                <tbody>


                    <tr>
                        <th></th>
                        <!-- <th>Total</th> -->
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>

                    </tr>

                </tbody>


            </table>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary"> Save</button>
        </div>

    </div>

</body>




@endsection