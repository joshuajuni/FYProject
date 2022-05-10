@extends('layouts.app')

@section('title', 'Blank')

@section('content')

<div class="container-fluid">
    <h3 class="text-dark mb-4">Create Session</h3>
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
            <p class="text-primary m-0 fw-bold">Session Info</p>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('session.store') }}">
            @csrf
                <div class="mb-3">
                    <label class="form-label" for="student_id">
                        <strong>Student</strong>
                    </label>
                    <select id="student_id" class="form-select js-example-basic-single" name="student_id" required>
                        <option selected disabled value="">--Select--</option>
                        @foreach($students as $row)
                        <option value="{{ $row->id }}">{{ $row->profile->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <div class="mb-3">
                            <label class="form-label" for="examiner1_id">
                                <strong>Examiner 1</strong>
                            </label>
                            <select id="examiner1_id" class="form-select js-example-basic-single" name="examiner1_id" required>
                                <option selected disabled value="">--Select--</option>
                                @foreach($examiners as $row)
                                <option value="{{ $row->id }}">{{ $row->profile->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <div class="mb-3">
                            <label class="form-label" for="examiner2_id">
                                <strong>Examiner 2</strong>
                            </label>
                            <select id="examiner2_id" class="form-select js-example-basic-single" name="examiner2_id" required>
                                <option selected disabled value="">--Select--</option>
                                @foreach($examiners as $row)
                                <option value="{{ $row->id }}">{{ $row->profile->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                	<label class="form-label" for="title">
                		<strong>Title</strong>
                	</label>
                	<input class="form-control" type="text" id="title" name="title" required>
                </div>
                <div class="mb-3">
                	<label class="form-label" for="proposal_title">
                		<strong>Proposal Title</strong>
                	</label>
                	<input class="form-control" type="text" id="proposal_title" name="proposal_title" required>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                        	<label class="form-label" for="date">
                        		<strong>Date</strong>
                        	</label>
                        	<input class="form-control" type="date" id="date" name="date" required>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                        	<label class="form-label" for="time">
                        		<strong>Time</strong>
                        	</label>
                        	<input class="form-control" type="time" id="time" name="time" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <div class="mb-3">
                        	<label class="form-label" for="venue_type">
                        		<strong>Venue Type</strong>
                        	</label>
                        	<select id="venue_type" class="form-select" name="venue_type" required>
                        		<option selected disabled value="">--Select--</option>
                                <option value="physical">Physical Venue</option>
                                <option value="online">Online</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <div class="mb-3">
                        	<label class="form-label" for="venue">
                        		<strong>Venue Name / Meeting Link</strong>
                        	</label>
                        	<input class="form-control" type="text" id="venue" name="venue" required>
                        </div>
                    </div>
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
