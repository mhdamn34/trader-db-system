@extends('layouts.main.app')

@section('content')

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <div class="card-header">
                            <h3>Product Database System</h3>
                        </div>
                        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                            <div class="container-fluid">
                                <div class="nav nav-pills">
                                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                        <li class="nav-item">
                                            <div class="input-group mb-3" style="padding-top: 7px;">
                                                <label class="" for="inputGroupSelect01" style="padding-right: 10px;">I am:</label>
                                                <select class="form-select" id="inputGroupSelect01">
                                                    <option selected> Choose User</option>
                                                    <option value="1">One</option>
                                                </select>
                                            </div>
                                        </li>
                                        <!-- <li class="nav-item">
                                            <a class="nav-link active" aria-current="page" href="#">New Customer Order</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link active" href="#">New Purchase Order</a>
                                        </li> -->
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>

                    <div class="card-body">

                        <div class="row">
                            <div class="col-xl-4 col-sm-12">
                                <div class="card">
                                    <div class="card-body" style="height: 300px;overflow-y:scroll">
                                        <div class="row">
                                            <div class="col">
                                                <h5 class="card-title">Active Orders</h5>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">#</th>
                                                                <th scope="col">First</th>
                                                                <th scope="col">Last</th>
                                                                <th scope="col">Handle</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <th scope="row">1</th>
                                                                <td>Mark</td>
                                                                <td>Otto</td>
                                                                <td>@mdo</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">2</th>
                                                                <td>Jacob</td>
                                                                <td>Thornton</td>
                                                                <td>@fat</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-sm-12">
                                <div class="card">
                                    <div class="card-body" style="height: 300px;overflow-y:scroll">
                                        <div class="row">
                                            <div class="col">
                                                <h5 class="card-title">Inventory to Reorder</h5>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="table-responsive">

                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col">#</th>
                                                                    <th scope="col">First</th>
                                                                    <th scope="col">Last</th>
                                                                    <th scope="col">Handle</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <th scope="row">1</th>
                                                                    <td>Mark</td>
                                                                    <td>Otto</td>
                                                                    <td>@mdo</td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">2</th>
                                                                    <td>Jacob</td>
                                                                    <td>Thornton</td>
                                                                    <td>@fat</td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">3</th>
                                                                    <td colspan="2">Larry the Bird</td>
                                                                    <td>@twitter</td>
                                                                </tr>

                                                                <tr>
                                                                    <th scope="row">1</th>
                                                                    <td>Mark</td>
                                                                    <td>Otto</td>
                                                                    <td>@mdo</td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">2</th>
                                                                    <td>Jacob</td>
                                                                    <td>Thornton</td>
                                                                    <td>@fat</td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">3</th>
                                                                    <td colspan="2">Larry the Bird</td>
                                                                    <td>@twitter</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>

                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
                            <div class="container-fluid">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="{{ url('/supplier') }}">Supplier</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" href=" {{ url('/shippers') }} ">Shipper</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" href=" {{ url('/orders') }} ">Orders</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" href=" {{ url('/purchaseOrder') }} ">Purchase Order</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" href=" {{ url('/employee') }} ">Employees</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" href=" {{ url('/customer') }} ">Customer</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" href=" {{ url('/product') }} ">Product</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" href=" {{ url('/order_grab') }} ">Order</a>
                                    </li>
                                </ul>
                            </div>
                        </nav> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>


@endsection