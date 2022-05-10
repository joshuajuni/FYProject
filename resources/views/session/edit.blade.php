@extends('layouts.app')

@section('title', 'Blank')

@section('content')

<div class="container-fluid">
    <h3 class="text-dark mb-4">Edit Session</h3>
    <!-- <button class="btn btn-primary" type="button">Edit Session</button> -->
    <div class="card shadow">
        <div class="card-header py-3">
            <p class="text-primary m-0 fw-bold">Session Info</p>
        </div>
        <div class="card-body">
            <form method="POST" action="{{route('session.update',$session)}}">
            @csrf
                <div class="mb-3">
                    <label class="form-label" for="student_id">
                        <strong>Student</strong>
                    </label>
                    <select id="student_id" class="form-select js-example-basic-single" name="student_id" required>
                        <option selected disabled value="">--Select--</option>
                        @foreach($students as $row)
                        <option <?php if ($session->student == $row): ?>selected<?php endif ?> value="{{ $row->id }}">{{ $row->profile->name }}</option>
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
                                <option <?php if ($session->examiner1_id == $row->id): ?>selected<?php endif ?> value="{{ $row->id }}">{{ $row->profile->name }}</option>
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
                                <option <?php if ($session->examiner2_id == $row->id): ?>selected<?php endif ?> value="{{ $row->id }}">{{ $row->profile->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="title">
                        <strong>Title</strong>
                    </label>
                    <input class="form-control" type="text" id="title" name="title" value="{{ $session->title }}" required>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="proposal_title">
                        <strong>Proposal Title</strong>
                    </label>
                    <input class="form-control" type="text" id="proposal_title" name="proposal_title" value="{{ $session->proposal_title }}" required>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label class="form-label" for="date">
                                <strong>Date</strong>
                            </label>
                            <input class="form-control" type="date" id="date" name="date" value="{{ $session->date }}" required>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label class="form-label" for="time">
                                <strong>Time</strong>
                            </label>
                            <input class="form-control" type="time" id="time" name="time" value="{{ $session->time }}" required>
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
                                <option <?php if ($session->venue_type == "physical"): ?>selected<?php endif ?> value="physical">Physical Venue</option>
                                <option <?php if ($session->venue_type == "online"): ?>selected<?php endif ?> value="online">Online</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <div class="mb-3">
                            <label class="form-label" for="venue">
                                <strong>Venue Name / Meeting Link</strong>
                            </label>
                            <input class="form-control" type="text" id="venue" name="venue" value="{{ $session->venue }}"  required>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary btn-sm" type="submit">Save</button>
                </div>
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
