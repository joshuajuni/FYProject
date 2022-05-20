@extends('layouts.app')

@section('title', 'Add Student')

@section('content')

<div class="container-fluid">
    <h3 class="text-dark mb-4">Add Student</h3>
    @if (Session::has('error'))
        <div class="alert alert-danger" role="alert">{{ Session::get('error', '') }}</div>
    @endif
    @if (Session::has('success'))
        <div class="alert alert-success" role="alert">{{ Session::get('success', '') }}</div>
    @endif
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="card shadow">
        <div class="card-header py-3">
            <p class="text-primary m-0 fw-bold">Student Info</p>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('student.store') }}">
            @csrf
                <div class="mb-3">
                    <label class="form-label" for="name">
                        <strong>Name</strong>
                    </label>
                    <input class="form-control" type="text" id="name" name="name">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="username">
                        <strong>Matrix No.</strong>
                    </label>
                    <input class="form-control" type="text" id="username" name="username">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="email">
                        <strong>Email</strong>
                    </label>
                    <input class="form-control" type="email" id="email" name="email">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="type">
                        <strong>Type</strong>
                    </label>
                    <select id="type" class="form-select" name="type">
                        <option selected disabled>--Select--</option>
                        <option value="1">MSc</option>
                        <option value="2">PhD</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="supervisor_id">
                        <strong>Supervisor</strong>
                    </label>
                    <select id="supervisor_id" class="form-select js-example-basic-single" name="supervisor_id">
                        <option selected disabled>--Select--</option>
                        @foreach($supervisors as $row)
                        <option value="{{$row->id}}">{{$row->profile->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="password">
                        <strong>Password</strong>
                    </label>
                    <input class="form-control" type="password" id="password" name="password" >
                </div>
                <div class="mb-3">
                    <label class="form-label" for="password_confirmation">
                        <strong>Confirm Password</strong>
                    </label>
                    <input class="form-control" type="password" id="password_confirmation" name="password_confirmation">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="phone_no">
                        <strong>Phone No.</strong>
                    </label>
                    <input class="form-control" type="text" id="phone_no" name="phone_no">
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary btn-sm" type="submit">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@section('script')
<script type="text/javascript">
    $(document).ready(function() {
        $('.js-example-basic-single').select2();
    });
</script>
@endsection
