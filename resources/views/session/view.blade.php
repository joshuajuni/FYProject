@extends('layouts.app')

@section('title', 'Blank')

@section('content')

<div class="container-fluid">
    <h3 class="text-dark mb-4">View Session</h3>
    <a class="btn btn-primary" href="{{route('session.edit')}}" role="button">Edit Session</a>
    <div class="card shadow">
        <div class="card-header py-3">
            <p class="text-primary m-0 fw-bold">Session Info</p>
        </div>
        <div class="card-body">
            <form method="POST" action="">
            @csrf
                <div class="mb-3">
                	<label class="form-label" for="title">
                		<strong>Title</strong>
                	</label>
                	<input class="form-control" type="text" id="title" name="title" disabled>
                </div>
                <div class="mb-3">
                	<label class="form-label" for="proposal_title">
                		<strong>Proposal Title</strong>
                	</label>
                	<input class="form-control" type="text" id="proposal_title" name="proposal_title" disabled>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                        	<label class="form-label" for="date">
                        		<strong>Date</strong>
                        	</label>
                        	<input class="form-control" type="date" id="date" name="date" disabled>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                        	<label class="form-label" for="time">
                        		<strong>Time</strong>
                        	</label>
                        	<input class="form-control" type="time" id="time" name="time" disabled>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <div class="mb-3">
                        	<label class="form-label" for="venue_type">
                        		<strong>Venue Type</strong>
                        	</label>
                        	<select id="venue_type" class="form-select" name="venue_type" disabled>
                        		<option selected disabled>--Select--</option>
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
                        	<input class="form-control" type="text" id="venue" name="venue" disabled>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection