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
                            <p class="text-primary m-0 fw-bold">User Settings</p>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="mb-3">
                                    <label class="form-label" for="name">
                                        <strong>Name</strong>
                                    </label>
                                    <input class="form-control" type="text" id="name" name="name">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="email">
                                        <strong>Email Address</strong>
                                    </label>
                                    <input class="form-control" type="email" id="email" placeholder="user@example.com" name="email">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="phone_no">
                                        <strong>Phone No.</strong>
                                    </label>
                                    <input class="form-control" type="phone_no" id="phone_no" placeholder="" name="phone_no">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="username">
                                        <strong>Matrix Number</strong>
                                    </label>
                                    <input class="form-control" type="text" id="username" placeholder="user.name" name="username">
                                </div>
                                <div class="mb-3"><button class="btn btn-primary btn-sm" type="submit">Save Settings</button></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
