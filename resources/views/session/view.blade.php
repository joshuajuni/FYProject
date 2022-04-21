@extends('layouts.app')

@section('title', 'Blank')

@section('content')

<div class="container-fluid">
    <h3 class="text-dark mb-4">View Session</h3>
    <a class="btn btn-primary" href="{{route('session.edit', $session)}}" role="button">Edit Session</a>
    <div class="card shadow">
        <div class="card-header py-3">
            <p class="text-primary m-0 fw-bold">Session Info</p>
        </div>
        <div class="card-body">
            <form method="POST" action="">
            @csrf
                <div class="mb-3">
                    <label class="form-label" for="student_id">
                        <strong>Student</strong>
                    </label>
                    <input class="form-control" type="text" id="student_id" name="student_id" value="{{ $session->student->profile->name }}" disabled>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <div class="mb-3">
                            <label class="form-label" for="examiner1_id">
                                <strong>Examiner 1</strong>
                            </label>
                            <input class="form-control" type="text" id="examiner1_id" name="examiner1_id" value="{{ $session->examiner1->profile->name }}" disabled>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <div class="mb-3">
                            <label class="form-label" for="examiner2_id">
                                <strong>Examiner 2</strong>
                            </label>
                            <input class="form-control" type="text" id="examiner2_id" name="examiner2_id" value="{{ $session->examiner2->profile->name }}" disabled>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                	<label class="form-label" for="title">
                		<strong>Title</strong>
                	</label>
                	<input class="form-control" type="text" id="title" name="title" value="{{ $session->title }}" disabled>
                </div>
                <div class="mb-3">
                	<label class="form-label" for="proposal_title">
                		<strong>Proposal Title</strong>
                	</label>
                	<input class="form-control" type="text" id="proposal_title" name="proposal_title" value="{{ $session->proposal_title }}" disabled>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                        	<label class="form-label" for="date">
                        		<strong>Date</strong>
                        	</label>
                        	<input class="form-control" type="date" id="date" name="date" value="{{ $session->date }}" disabled>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                        	<label class="form-label" for="time">
                        		<strong>Time</strong>
                        	</label>
                        	<input class="form-control" type="time" id="time" name="time" value="{{ $session->time }}" disabled>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <div class="mb-3">
                        	<label class="form-label" for="venue_type">
                        		<strong>Venue Type</strong>
                        	</label>
                        	<input 
                            class="form-control" 
                            type="text"
                            id="venue_type"
                            name="venue_type"
                            @if ($session->venue_type == "physical")
                                value="Physical"
                            @elseif ($session->venue_type == "online")
                                value="Online"
                            @endif
                            disabled>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <div class="mb-3">
                        	<label class="form-label" for="venue">
                        		<strong>Venue Name / Meeting Link</strong>
                        	</label>
                        	<input class="form-control" type="text" id="venue" name="venue" value="{{ $session->venue }}" disabled>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection