@extends('layouts.main.app')

@section('content')

<div class="card">
    <form action=" {{ route('shipper.update', ['shipper_id' => $shippers->id]) }} " method="POST">
        <div class="card-header">
            <h4>Update Shipper Details</h4>

            @csrf
            <div class="row">
                <div class="col d-flex justify-content-end">
                    <a href=" {{ route('shipper.index') }}" class="btn btn-secondary"> Cancel</a>
                    <button type="submit" class="btn btn-primary" value="Save" name="action"> Save </button>

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
                            <input type="text" name="company" class="form-control" value="{{ $shippers->company}}">
                        </div>
                    </div>
                    <br>
                    <h5>Primary Contact</h5>
                    <div class="row mb-3">
                        <label for="firstname" class="col-sm-3 col-form-label">First Name</label>
                        <div class="col-sm-9">
                            <input type="text" name="first_name" class="form-control" id="firstname" value="{{ $shippers->first_name}}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="lastname" class="col-sm-3 col-form-label">Last Name</label>
                        <div class="col-sm-9">
                            <input type="text" name="last_name" class="form-control" id="lastname" value="{{ $shippers->last_name}}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="job" class="col-sm-3 col-form-label">Job Title</label>
                        <div class="col-sm-9">
                            <input type="text" name="job_title" class="form-control" id="jobTitle" value="{{ $shippers->job_title}}">
                        </div>
                    </div>
                    <br>
                    <h5>Phone Numbers</h5>
                    <div class="row mb-3">
                        <label for="businessphone" class="col-sm-3 col-form-label">Business Phone</label>
                        <div class="col-sm-9">
                            <input type="text" name="business_phone" class="form-control" id="business" value="">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="mobilephone" class="col-sm-3 col-form-label">Mobile Phone</label>
                        <div class="col-sm-9">
                            <input type="text" name="mobile_phone" class="form-control" id="mobile" value="{{ $shippers->phone}}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="fax" class="col-sm-3 col-form-label">Fax Number</label>
                        <div class="col-sm-9">
                            <input type="text" name="fax_number" class="form-control" id="fax" value="">
                        </div>
                    </div>
                    <br>
                    <h5>Address</h5>
                    <div class="row mb-3">
                        <label for="street" class="col-sm-3 col-form-label"> Address</label>
                        <div class="col-sm-9">
                            <input type="text" name="address" class="form-control" id="street" value="{{ $shippers->address}}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="city" class="col-sm-3 col-form-label">City</label>
                        <div class="col-sm-9">
                            <input type="text" name="city" class="form-control" id="city" value="{{ $shippers->city}}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="state" class="col-sm-3 col-form-label">State/Province</label>
                        <div class="col-sm-9">
                            <input type="text" name="state" class="form-control" id="state" value="{{ $shippers->state}}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="zip" class="col-sm-3 col-form-label">Zip/Postal Code</label>
                        <div class="col-sm-9">
                            <input type="text" name="postal_code" class="form-control" id="zip" value="{{ $shippers->postal_code}}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="country" class="col-sm-4 col-form-label">Country/Region</label>
                        <div class="col-sm-8">
                            <input type="text" name="country" class="form-control" id="country" value="{{ $shippers->country}}">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="row mb-3">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="text" name="email_address" class="form-control" id="email" value="{{ $shippers->email}}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="web" class="col-sm-2 col-form-label">Web Page</label>
                        <div class="col-sm-10">
                            <input type="text" name="web_page" class="form-control" id="web" value="s">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="notes" class="col-sm-2 col-form-label">Notes</label>
                        <div class="col-sm-10">
                            <input type="text" name="notes" class="form-control" id="notes" value="{{ $shippers->notes}}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="img" class="col-sm-2 col-form-label">Image</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control" id="img">
                        </div>
                    </div>
                </div>
            </div>
    </form>

</div>


</div>

@endsection
