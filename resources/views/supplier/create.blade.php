@extends('layouts.main.app')

@section('content')

<div class="card">

    <div class="card-header">
        <h5>Create New Supplier</h5>
        <div class="row">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#" id="gotoId">Go To <span class="sr-only"></span></a>
                        <li class="nav-item active" style="padding-top: 8px;">
                            <div class="input-group mb-3">
                                <select class="form-select" id="gotoId">
                                    <option selected>Choose...</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </li>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="modal" data-bs-target="#emailModal">E-mail Customer</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Create Outlook Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">New</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href=" {{ url('/supplier') }} ">Close</a>
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
        <form action=" {{ route('supplier.store') }} " method="POST">
            @csrf
            <div class="row">
                <div class="col">
                    <div class="row mb-3">
                        <label for="company" class="col-sm-3 col-form-label">Company</label>
                        <div class="col-sm-9">
                            <input type="text" name="company" class="form-control" id="company">
                        </div>
                    </div>
                    <br>
                    <h5>Primary Contact</h5>
                    <div class="row mb-3">
                        <label for="firstname" class="col-sm-3 col-form-label">First Name</label>
                        <div class="col-sm-9">
                            <input type="text" name="first_name" class="form-control" id="firstname">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="lastname" class="col-sm-3 col-form-label">Last Name</label>
                        <div class="col-sm-9">
                            <input type="text" name="last_name" class="form-control" id="lastname">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="job" class="col-sm-3 col-form-label">Job Title</label>
                        <div class="col-sm-9">
                            <input type="text" name="job_title" class="form-control" id="jobTitle">
                        </div>
                    </div>
                    <br>
                    <h5>Phone Numbers</h5>
                    <div class="row mb-3">
                        <label for="businessphone" class="col-sm-3 col-form-label">Business Phone</label>
                        <div class="col-sm-9">
                            <input type="text" name="business_phone" class="form-control" id="business">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="mobilephone" class="col-sm-3 col-form-label">Home Phone</label>
                        <div class="col-sm-9">
                            <input type="text" name="home_phone" class="form-control" id="mobile">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="mobilephone" class="col-sm-3 col-form-label">Mobile Phone</label>
                        <div class="col-sm-9">
                            <input type="text" name="mobile_phone" class="form-control" id="mobile">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="fax" class="col-sm-3 col-form-label">Fax Number</label>
                        <div class="col-sm-9">
                            <input type="text" name="fax_number" class="form-control" id="fax">
                        </div>
                    </div>
                    <br>
                    <h5>Address</h5>
                    <div class="row mb-3">
                        <label for="street" class="col-sm-3 col-form-label"> Address</label>
                        <div class="col-sm-9">
                            <input type="text" name="address" class="form-control" id="street">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="city" class="col-sm-3 col-form-label">City</label>
                        <div class="col-sm-9">
                            <input type="text" name="city" class="form-control" id="city">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="state" class="col-sm-3 col-form-label">State/Province</label>
                        <div class="col-sm-9">
                            <input type="text" name="state" class="form-control" id="state">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="zip" class="col-sm-3 col-form-label">Zip/Postal Code</label>
                        <div class="col-sm-9">
                            <input type="text" name="postal_code" class="form-control" id="zip">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="country" class="col-sm-3 col-form-label">Country/Region</label>
                        <div class="col-sm-8">
                            <input type="text" name="country" class="form-control" id="country">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="col">
                        <div class="row">
                            <div class="row mb-5">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <img src="{{ asset('dist/img/avatar.png') }}" class="img-thumbnail" style="width: 200px; height: 200px;" alt="...">
                                </div>
                            </div>
                            <div class="col" style="padding: 30px;">
                                <div class="row mb-3">
                                    <label for="email" class="col-sm-4 col-form-label">Email</label>
                                    <div class="col-sm-12">
                                        <input type="text" name="email_address" class="form-control" id="email">
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="web" class="col-sm-4 col-form-label">Web Page</label>
                                    <div class="col-sm-12">
                                        <input type="text" name="web_page" class="form-control" id="web">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="input-group">
                        <label for="notes" class="col-sm-2 col-form-label">Notes</label>
                        <textarea type="text" name="notes" class="form-control" aria-label="With textarea" style="height: 200px;"></textarea>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary"> Save</button>
            </div>
        </form>
    </div>

</div>
@endsection