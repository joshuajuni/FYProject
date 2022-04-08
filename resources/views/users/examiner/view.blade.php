@extends('layouts.app')

@section('title', 'View Examiner')

@section('content')

<div class="container-fluid">
    <h3 class="text-dark mb-4">View Examiner</h3>
    <a class="btn btn-primary" href="{{route('examiner.edit')}}" role="button">Edit Examiner</a>
    <div class="card shadow">
        <div class="card-header py-3">
            <p class="text-primary m-0 fw-bold">Examiner Info</p>
        </div>
        <div class="card-body">
            <form>
                <div class="mb-3">
                    <label class="form-label" for="name">
                        <strong>Name</strong>
                    </label>
                    <input class="form-control" type="text" id="name" name="name" disabled>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="email">
                        <strong>Email</strong>
                    </label>
                    <input class="form-control" type="text" id="email" name="email" disabled>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="phone_no">
                        <strong>Phone No.</strong>
                    </label>
                    <input class="form-control" type="text" id="phone_no" name="phone_no" disabled>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection