@extends('layouts.app')

@section('title', 'Admin Listing - Unactive')

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
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <p class="text-primary m-0 fw-bold">Admin Listing</p>
                </div>
                <div class="col-md-6">
                    <input class="form-control" id="myInput" type="text" placeholder="Search..">
                </div>
            </div>
            <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('admin.index')}}">Active</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="" disabled>Inactive</a>
                </li>
            </ul>
        </div>
        <div class="card-body">
            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                <table class="table table-striped my-0" id="dataTable">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Phone No</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody id="myTable">
                        @foreach($admins as $row)
                        <tr>
                            <td>{{ $row->profile->name }}</td>
                            <td>{{ $row->profile->user->username }}</td>
                            <td>{{ $row->profile->user->email }}</td>
                            <td>{{ $row->profile->phone_no }}</td>
                            <td>
                                @if($row->is_active == true)
                                    <span class="badge bg-success">Active</span>
                                @elseif($row->is_active == false)
                                    <span class="badge bg-danger">Unactive</span>
                                @endif
                            </td>
                            <td>
                                <div class="btn-group" role="group">
                                    <a class="btn btn-primary" href="{{route('admin.view',$row->profile->admin)}}" role="button">View</a>
                                    <a class="btn btn-primary" href="{{route('admin.edit',$row->profile->admin)}}" role="button">Edit</a>
                                    @if($row->is_active == true)
                                    <a role="button" class="btn btn-danger"
                                        data-bs-toggle="modal"
                                        data-bs-target="#deleteModal"
                                        data-bs-name="{{$row->profile->name}}"
                                        data-bs-link="{{route('admin.destroy',$row)}}"
                                    >
                                        Deactivate
                                    </a>
                                    @elseif($row->is_active == false)
                                    <a class="btn btn-success" href="{{route('admin.makeActive',$row)}}" role="button">Make active</a>
                                    @endif
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
            <div class="row">
                <div class="col-md-6 align-self-center">
                    <p id="dataTable_info" class="dataTables_info" role="status" aria-live="polite"></p>
                </div>
                <div class="col-md-6">
                    <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
                        {!! $admins->links() !!}
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteModalLabel">Confirmation</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Confirm Delete?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <a class="btn btn-primary" href="" role="button">Deactivate</a>
      </div>
    </div>
  </div>
</div>

@endsection
@section('script')

    <script type="text/javascript">
        var deleteModal = document.getElementById('deleteModal')
        deleteModal.addEventListener('show.bs.modal', function (event) {
          // Button that triggered the modal
          var button = event.relatedTarget
          // Extract info from data-bs-* attributes
          var link = button.getAttribute('data-bs-link')
          var name = button.getAttribute('data-bs-name')
          // If necessary, you could initiate an AJAX request here
          // and then do the updating in a callback.
          //
          // Update the modal's content.
          var modalBody = deleteModal.querySelector('.modal-body')
          var modalLink = deleteModal.querySelector('.modal-footer a')

          modalBody.textContent = 'Are you sure to deactivate ' + name + ' as admin?'
          modalLink.href = link

        })
    </script>
    
    <script>
    $(document).ready(function(){
        $("#myInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#myTable tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
    </script>

@endsection
