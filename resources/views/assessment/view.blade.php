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
    @if ( $assessment->examiner->id == Auth::user()->profile->examiner->id)
    <a class="btn btn-primary" href="{{route('assessment.edit', $assessment)}}" role="button">Edit Assessment</a>
    @endif
    <div class="card shadow">
        <div class="card-header py-3">
            <p class="text-primary m-0 fw-bold">Assessment Info</p>
        </div>
        <div class="card-body">
            <form method="POST" action="">
            @csrf
                <div class="mb-3">
                    <label class="form-label" for="examiner_name">
                        <strong>Examiner Name</strong>
                    </label>
                    <input class="form-control" type="text" id="examiner_name" name="examiner_name" value="{{ $assessment->examiner->profile->name}}" disabled>
                </div>
                <div class="mb-3">
                    <label for="comments" class="form-label">
                        <strong>Comments</strong>
                    </label>
                    <textarea class="ckeditor form-control" id="comments" name="comments" disabled>{!! $assessment->comments !!}</textarea>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
