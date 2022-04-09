@extends('layouts.app')

@section('title', 'Edit Student')

@section('content')

<div class="container-fluid">
    <h3 class="text-dark mb-4">Edit Student</h3>
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
            <form method="POST" action="{{route('student.update',$student)}}">
            @csrf
                <div class="mb-3">
                    <label class="form-label" for="name">
                        <strong>Name</strong>
                    </label>
                    <input class="form-control" type="text" id="name" name="name" value="{{ $student->profile->name }}">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="username">
                        <strong>Matrix No.</strong>
                    </label>
                    <input class="form-control" type="text" id="username" name="username" value="{{ $student->profile->user->username }}">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="email">
                        <strong>Email</strong>
                    </label>
                    <input class="form-control" type="email" id="email" value="{{ $student->profile->user->email }}" name="email">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="supervisor_id">
                        <strong>Supervisor</strong>
                    </label>
                    <select id="supervisor_id" class="form-select" name="supervisor_id">
                        @foreach($supervisors as $row)
                        <option <?php if ($student->supervisor == $row): ?>selected<?php endif ?> value="{{$row->id}}">
                            {{$row->profile->name}}
                        </option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="phone_no">
                        <strong>Phone No.</strong>
                    </label>
                    <input class="form-control" type="text" id="phone_no" value="{{ $student->profile->phone_no }}" name="phone_no">
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary btn-sm" type="submit">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection