@extends('layouts.app')

@section('title', 'View Supervisor')

@section('content')

<div class="container-fluid">
    <h3 class="text-dark mb-4">View Supervisor</h3>
    <a class="btn btn-primary" href="{{route('supervisor.edit', $supervisor)}}" role="button">Edit Supervisor</a>
    <div class="card shadow">
        <div class="card-header py-3">
            <p class="text-primary m-0 fw-bold">Supervisor Info</p>
        </div>
        <div class="card-body">
            <form>
                <div class="mb-3">
                    <label class="form-label" for="name">
                        <strong>Name</strong>
                    </label>
                    <input class="form-control" type="text" id="name" name="name" value="{{ $supervisor->profile->name }}" disabled>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="username">
                        <strong>Username</strong>
                    </label>
                    <input class="form-control" type="text" id="username" name="username" value="{{ $supervisor->profile->user->username }}" disabled>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="email">
                        <strong>Email</strong>
                    </label>
                    <input class="form-control" type="email" id="email" name="email" value="{{ $supervisor->profile->user->email }}" disabled>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="phone_no">
                        <strong>Phone No.</strong>
                    </label>
                    <input class="form-control" type="text" id="phone_no" name="phone_no" value="{{ $supervisor->profile->phone_no }}" disabled>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="email">
                        <strong>Students under supervision</strong>
                    </label>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Matrix No.</th>
                                <th>Email</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($students as $row)
                            <tr>
                                <td>{{ $row->profile->name }}</td>
                                <td>{{ $row->profile->user->username }}</td>
                                <td>{{ $row->profile->user->email }}</td>
                                <td>
                                    @if($row->is_active == true)
                                        <span class="badge bg-success">Active</span>
                                    @elseif($row->is_active == false)
                                        <span class="badge bg-danger">Unactive</span>
                                    @endif
                                </td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <a class="btn btn-primary" href="{{route('student.view',$row->profile->student)}}" role="button">View</a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col-md-6 align-self-center">
                        <p id="dataTable_info" class="dataTables_info" role="status" aria-live="polite"></p>
                    </div>
                    <div class="col-md-6">
                        <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
                            {!! $students->links() !!}
                        </nav>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection