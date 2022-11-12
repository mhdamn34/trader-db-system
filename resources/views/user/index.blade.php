@extends('layouts.main.app')

@section('content')

<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                <img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                <span class="font-weight-bold">{{ $users->name }}</span>
                <span class="text-black-50">{{ $users->email }}</span>
                <span> </span>
            </div>
        </div>
        <div class="col-md border-right">
            <div class="p-3 py-5">
                <form action="{{ route('user.update', ['user_id' => $users->id]) }}" method="post">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Profile Settings</h4>
                    </div>
                    @csrf
                    <div class="row mt-2">
                        <div class="col-md-6">
                            <label class="labels">Name</label>
                            <input type="text" class="form-control" placeholder="name" value="{{ $users->name }}" name="name">
                        </div>
                        <div class="col-md-6">
                            <label class="labels">Surname</label>
                            <input type="text" class="form-control" value="{{ $users->surname }}" placeholder="surname" name="surname">
                        </div>
                        <div class="col-md-12">
                            <label class="labels">Email ID</label>
                            <input type="text" class="form-control" placeholder="enter email id" value="{{ $users->email }}" name="email">
                        </div>
                        <div class="col-md-12">
                            <label class="labels">Password</label>
                            <input type="password" class="form-control" placeholder="enter email id" value="{{ $users->password }}" disabled>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mt-5">
                        <h4 class="text-right">Biodata Settings</h4>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-12">
                            <label class="labels">Mobile Number</label>
                            <input type="text" class="form-control" placeholder="Phone Number" value="{{ $users->mobile_number }}" name="mobile_number">
                        </div>
                        <div class="col-md-12">
                            <label class="labels">Address Line 1</label>
                            <input type="text" class="form-control" placeholder="Address Line 1" value="{{ $users->address1 }}" name="address1">
                        </div>
                        <div class="col-md-12">
                            <label class="labels">Address Line 2</label>
                            <input type="text" class="form-control" placeholder="Address Line 2" value="{{ $users->address2 }}" name="address2">
                        </div>
                        <div class="col-md-12">
                            <label class="labels">State</label>
                            <select class="form-select" value="" id="state" name="state">Select State
                                @foreach($states as $state)
                                <option value="{{ $state->state_code }}">
                                    {{ $state->state_name }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-12">
                            <label class="labels">Postcode</label>
                            <input type="text" class="form-control" placeholder="" value="" name="postcode">
                        </div>
                        <div class="col-md-12">
                            <label class="labels">Country</label>
                            <input type="text" class="form-control" placeholder="" value="{{ $users->country }}" name="country">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-7">
                            <label class="labels">Education</label>
                            <select class="form-select" name="education">
                                @foreach($educations as $education)
                                <option value="{{ $education->id }}" @if($users->education == $education->id) selected @endif>
                                    {{ $education->education_level }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="mt-5 text-center">
                    <button type="submit" class="btn btn-primary" value="Save" name="action">Save Profile</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection