@extends('layouts.app')

@section('title', 'Edit Supervisor')

@section('content')

<div class="container-fluid">
    <h3 class="text-dark mb-4">Edit Supervisor</h3>
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
            <p class="text-primary m-0 fw-bold">Supervisor Info</p>
            @if (isset($supervisor->profile->examiner))
                <span class="badge bg-success">Has Examiner Role</span>
            @else
                <form method="POST" action="{{ route('examiner.store') }}">
                @csrf
                    <input class="form-control" type="email" id="email" name="email" value="{{ $supervisor->profile->user->email }}" hidden>
                    <button class="btn btn-primary btn-sm" type="submit">Add as Examiner</button>
                </form>
            @endif
        </div>
        <div class="card-body">
            <form method="POST" action="{{route('supervisor.update',$supervisor)}}">
            @csrf
                <div class="mb-3">
                    <label class="form-label" for="name">
                        <strong>Name</strong>
                    </label>
                    <input class="form-control" type="text" id="name" name="name" value="{{ $supervisor->profile->name }}">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="email">
                        <strong>Email</strong>
                    </label>
                    <input class="form-control" type="email" id="email" value="{{ $supervisor->profile->user->email }}" name="email">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="phone_no">
                        <strong>Phone No.</strong>
                    </label>
                    <input class="form-control" type="text" id="phone_no" value="{{ $supervisor->profile->phone_no }}" name="phone_no">
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary btn-sm" type="submit">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection