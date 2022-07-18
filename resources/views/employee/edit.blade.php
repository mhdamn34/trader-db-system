@extends('layouts.main.app')

@section('content')

<div class="card">
    <form action="{{ route('employee.update',['employee_id' => $employees->id]) }} " method="POST">
        <div class="card-header">
            <h4>Update Employee Details</h4>
            @csrf
            <div class="row">
                <div class="col d-flex justify-content-end">
                    <a href=" {{ route('employee.index') }}" class="btn btn-secondary"> Cancel</a>
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
                        <label for="company" class="col-sm-3 col-form-label">Company</label>
                        <div class="col-sm-9">
                            <input type="text" name="company" class="form-control" value="{{ $employees->company}}">
                        </div>
                    </div>
                    <br>
                    <h5>Primary Contact</h5>
                    <div class="row mb-3">
                        <label for="firstname" class="col-sm-3 col-form-label">First Name</label>
                        <div class="col-sm-9">
                            <input type="text" name="first_name" class="form-control" id="first_name" value="{{ $employees->first_name}}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="lastname" class="col-sm-3 col-form-label">Last Name</label>
                        <div class="col-sm-9">
                            <input type="text" name="last_name" class="form-control" id="last_name" value="{{ $employees->last_name}}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="job" class="col-sm-3 col-form-label">Job Title</label>
                        <div class="col-sm-9">
                            <input type="text" name="job_title" class="form-control" id="job_title" value="{{ $employees->job_title}}">
                        </div>
                    </div>
                    <br>
                    <h5>Phone Numbers</h5>
                    <div class="row mb-3">
                        <label for="businessphone" class="col-sm-3 col-form-label">Hire Date</label>
                        <div class="col-sm-9">
                            <input type="date" name="hire_date" class="form-control" id="business_phone" value="{{ $employees->hire_date}}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="mobilephone" class="col-sm-3 col-form-label">Home Phone</label>
                        <div class="col-sm-9">
                            <input type="text" name="home_phone" class="form-control" id="home_phone" value="{{ $employees->home_phone}}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="mobilephone" class="col-sm-3 col-form-label">Mobile Phone</label>
                        <div class="col-sm-9">
                            <input type="text" name="mobile_phone" class="form-control" id="mobile_phone" value="">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="fax" class="col-sm-3 col-form-label">Fax Number</label>
                        <div class="col-sm-9">
                            <input type="text" name="fax_number" class="form-control" id="fax_number" value="">
                        </div>
                    </div>
                    <br>
                    <h5>Address</h5>
                    <div class="row mb-3">
                        <label for="street" class="col-sm-3 col-form-label"> Address</label>
                        <div class="col-sm-9">
                            <input type="text" name="address" class="form-control" id="address" value="{{ $employees->address}}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="city" class="col-sm-3 col-form-label">City</label>
                        <div class="col-sm-9">
                            <input type="text" name="city" class="form-control" id="city" value="{{ $employees->city}}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="state" class="col-sm-3 col-form-label">State</label>
                        <div class="col-sm-9">
                            <input type="text" name="state" class="form-control" id="state" value="{{ $employees->state}}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="zip" class="col-sm-3 col-form-label">Zip/Postal Code</label>
                        <div class="col-sm-9">
                            <input type="text" name="postal_code" class="form-control" id="postal_code" value="{{ $employees->postal_code}}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="country" class="col-sm-3 col-form-label">Country/Region</label>
                        <div class="col-sm-9">
                            <input type="text" name="country" class="form-control" id="country" value="{{ $employees ->country}}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="email" class="col-sm-3 col-form-label">Email</label>
                        <div class="col-sm-9">
                            <input type="text" name="email_address" class="form-control" id="email_address" value="{{ $employees->email}}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="web" class="col-sm-3 col-form-label">Web Page</label>
                        <div class="col-sm-9">
                            <input type="text" name="web_page" class="form-control" id="web_page" value="">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="notes" class="col-sm-3 col-form-label">Notes</label>
                        <div class="col-sm-9">
                            <input type="text" name="notes" class="form-control" id="notes" value="{{ $employees->notes}}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="img" class="col-sm-3 col-form-label">Image</label>
                        <div class="col-sm-9">
                            <input type="file" class="form-control" id="img">
                        </div>
                    </div>
                </div>
            </div>
    </form>
</div>

@endsection