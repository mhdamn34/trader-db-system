@extends('layouts.main.app')

@section('content')

<div class="card">
    <div class="card-header">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                    <!-- <a class="navbar-brand" href="#">Hidden brand</a> -->
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="modal" data-bs-target="#exampleModal">E-mail Shipper</a>
                            <!-- <a class="nav-link active" aria-current="page" href="#">E-mail Shipper :</a> -->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Create Outlook Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link ">Save and New</a>
                        </li>
                    </ul>

                    <form class="d-flex">
                        <a button class="btn btn-outline-success" href="{{ url('/shippers')}}" type="submit">Close</button></a>
                    </form>

                </div>
            </div>
        </nav>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Send Object As</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <label for="output">Select output format:</label>

                <select name="output" id="output">
                    <option value=""></option>
                    <option value="xls">Excel 97 - Excel 2003 Workbook (*.xls)</option>
                    <option value="xlsb">Excel Binary Workbook (*.xlsb)</option>
                    <option value="xlsx">Excel Workbook (*xlsx)</option>
                    <option value="html">HTML (*.htm; *.html)</option>
                    <option value="html">HTML (*.htm; *.html)</option>
                    <option value="workbook">Microsoft Excel 5.0/95 Workbook (*.xls)</option>
                    <option value="pdf">PDF Format (*.pdf)</option>
                    <option value="rtf">Rich Text Format (*.rtf)</option>
                    <option value="txt">Text Files (*.txt)</option>
                    <option value="xps">XPS Format (*.xps)</option>
                </select>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">OK</button>
            </div>
        </div>
    </div>
</div>

<br>
<div class="card">
    <div class="card-header">
        <h5>General</h5>
    </div>
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
    <form action=" {{ route('shipper.store') }} " method="POST">
        @csrf
        <div class="card-body">
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
                            <input type="text" name="job_title" class="form-control" id="job">
                        </div>
                    </div>

                    <br>
                    <h5>Phone Numbers</h5>

                    <div class="row mb-3">
                        <label for="businessphone" class="col-sm-3 col-form-label">Business Phone</label>
                        <div class="col-sm-9">
                            <input type="number" name="business_phone" class=" form-control" id="business">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="mobilephone" class="col-sm-3 col-form-label">Mobile Phone</label>
                        <div class="col-sm-9">
                            <input type="number" name="mobile_phone" class="form-control" id="mobile">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="fax" class="col-sm-3 col-form-label">Fax Number</label>
                        <div class="col-sm-9">
                            <input type="number" name="fax_number" class="form-control" id="fax">
                        </div>
                    </div>

                    <br>
                    <h5>Address</h5>

                    
                    <div class="row mb-3">
                        <label for="street" class="col-sm-3 col-form-label">Address</label>
                        <div class="col-sm-9">
                            <input type="text" name="address" class="form-control" id="street">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="street" class="col-sm-3 col-form-label">Street</label>
                        <div class="col-sm-9">
                            <input type="text" name="street" class="form-control" id="street">
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
                            <input type="number" name="postal_code" class="form-control" id="zip">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="country" class="col-sm-3 col-form-label">Country/Region</label>
                        <div class="col-sm-9">
                            <input type="text" name="country" class="form-control" id="country">
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="row mb-3">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="text" name="email_address" class="form-control" id="email">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="web" class="col-sm-2 col-form-label">Web Page</label>
                        <div class="col-sm-10">
                            <input type="text" name="web_page" class="form-control" id="web">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="notes" class="col-sm-2 col-form-label">Notes</label>
                        <div class="col-sm-10">
                            <input type="text" name="notes" class="form-control" id="notes">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="img" class="col-sm-2 col-form-label">Image</label>
                        <div class="col-sm-10">
                            <input type="file" name="image" class="form-control" id="img">
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary"> Save</button>
                </div>
            </div>
        </div>
    </form>
</div>

@endsection