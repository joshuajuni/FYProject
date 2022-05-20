@extends('layouts.app')

@section('title', 'View Student')

@section('content')

<div class="container-fluid">
    <h3 class="text-dark mb-4">View Student</h3>
    @if (isset(Auth::user()->profile->admin))
    <a class="btn btn-primary" href="{{route('student.edit', $student)}}" role="button">Edit Student</a>
    @endif
    <div class="card shadow">
        <div class="card-header py-3">
            <p class="text-primary m-0 fw-bold">Student Info</p>
        </div>
        <div class="card-body">
            <form>
                <div class="mb-3">
                    <label class="form-label" for="name">
                        <strong>Name</strong>
                    </label>
                    <input class="form-control" type="text" id="name" name="name" value="{{ $student->profile->name }}" disabled>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="username">
                        <strong>Matrix No.</strong>
                    </label>
                    <input class="form-control" type="text" id="username" name="username" value="{{ $student->profile->user->username }}" disabled>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="email">
                        <strong>Email</strong>
                    </label>
                    <input class="form-control" type="email" id="email" name="email" value="{{ $student->profile->user->email }}" disabled>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="type">
                        <strong>Type</strong>
                    </label>
                    <input class="form-control" type="text" id="type" name="type"
                    <?php if ($student->type == 1): ?>
                         value="MSc"
                    <?php elseif ($student->type == 2): ?>
                         value="PhD
                    <?php endif ?>
                    disabled>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="supervisor_id">
                        <strong>Supervisor</strong>
                    </label>
                    <input class="form-control" type="text" id="supervisor_id" name="supervisor_id" value="{{ $student->supervisor->profile->name }}" disabled>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="phone_no">
                        <strong>Phone No.</strong>
                    </label>
                    <input class="form-control" type="text" id="phone_no" name="phone_no" value="{{ $student->profile->phone_no }}" disabled>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection