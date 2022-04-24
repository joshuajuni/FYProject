@extends('layouts.app')

@section('title', 'Profile')

@section('content')

<div class="container-fluid">
    <h3 class="text-dark mb-4">Profile</h3>
    <div class="row mb-3">
        <div class="col-lg-12">
            <div class="row">
                <div class="col">
                    <div class="card shadow mb-3">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 fw-bold">User Details</p>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="mb-3">
                                    <label class="form-label" for="name">
                                        <strong>Name</strong>
                                    </label>
                                    <input class="form-control" type="text" id="name" placeholder="{{ Auth::user()->profile->name }}" name="name" disabled>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="email">
                                        <strong>Email Address</strong>
                                    </label>
                                    <input class="form-control" type="email" id="email" placeholder="{{ Auth::user()->email }}" name="email" disabled>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="phone_no">
                                        <strong>Phone No.</strong>
                                    </label>
                                    <input class="form-control" type="phone_no" id="phone_no" placeholder="{{ Auth::user()->profile->phone_no }}" name="phone_no" disabled>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="username">
                                        @if( isset(Auth::user()->profile->student ))
                                        <strong>Matrix Number</strong>
                                        @else
                                        <strong>Username</strong>
                                        @endif
                                    </label>
                                    <input class="form-control" type="text" id="username" placeholder="{{ Auth::user()->username }}" name="username" disabled>
                                </div>
                                <!-- <div class="mb-3"><button class="btn btn-primary btn-sm" type="submit">Save Settings</button></div> -->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
