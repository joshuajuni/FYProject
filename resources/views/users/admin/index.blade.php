@extends('layouts.app')

@section('title', 'Admin Listing')

@section('content')

<div class="container-fluid">
    <h3 class="text-dark mb-4">Admin</h3>
    @if (Session::has('error'))
        <div class="alert alert-danger" role="alert">{{ Session::get('error', '') }}</div>
    @endif
    @if (Session::has('success'))
        <div class="alert alert-success" role="alert">{{ Session::get('success', '') }}</div>
    @endif
    <a class="btn btn-primary" href="{{route('admin.create')}}" role="button">Add Admin</a>
    <div class="card shadow">
        <div class="card-header py-3">
            <p class="text-primary m-0 fw-bold">Admin Listing</p>
        </div>
        <div class="card-body">
            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                <table class="table my-0" id="dataTable">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Phone No</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($admins as $row)
                        <tr>
                            <td>{{ $row->profile->name }}</td>
                            <td>{{ $row->profile->user->username }}</td>
                            <td>{{ $row->profile->user->email }}</td>
                            <td>{{ $row->profile->phone_no }}</td>
                            <td>
                                <div class="btn-group" role="group">
                                    <a class="btn btn-primary" href="{{route('admin.view',$row->profile->admin)}}" role="button">View</a>
                                    <a class="btn btn-primary" href="{{route('admin.edit',$row->profile->admin)}}" role="button">Edit</a>
                                    <a role="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#deleteModal">Delete</a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr></tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Confirm Delete?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <a class="btn btn-primary" href="{{route('admin.destroy',$row->profile->admin)}}" role="button">Delete</a>
      </div>
    </div>
  </div>
</div>

@endsection