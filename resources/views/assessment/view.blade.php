@extends('layouts.app')

@section('title', 'Blank')

@section('content')

<div class="container-fluid">
    <h3 class="text-dark mb-4">View Assessment for {{ $assessment->session->title}}</h3>
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
    <a class="btn btn-primary" href="{{route('assessment.edit', $assessment)}}" role="button">Edit Assessment</a>
    <div class="card shadow">
        <div class="card-header py-3">
            <p class="text-primary m-0 fw-bold">Session Info</p>
        </div>
        <div class="card-body">
            <form method="POST" action="">
            @csrf
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <div class="mb-3">
                            <label class="form-label" for="student_name">
                                <strong>Student Name</strong>
                            </label>
                            <input class="form-control" type="text" id="student_name" name="student_name" value="{{ $assessment->session->student->profile->name}}" disabled>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <div class="mb-3">
                            <label class="form-label" for="student_matrix_no">
                                <strong>Student Matrix No.</strong>
                            </label>
                            <input class="form-control" type="text" id="student_matrix_no" name="student_matrix_no" value="{{ $assessment->session->student->profile->user->username}}" disabled>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="comments" class="form-label">
                        <strong>Comments</strong>
                    </label>
                    <textarea class="form-control" id="comments" name="comments"  rows="5" disabled>{{ $assessment->comments }}</textarea>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
