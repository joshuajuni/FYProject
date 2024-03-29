@extends('layouts.app')

@section('title', 'Session Listing')

@section('content')

<div class="container-fluid">
    <h3 class="text-dark mb-4">Session</h3>
    @if (Session::has('error'))
        <div class="alert alert-danger" role="alert">{{ Session::get('error', '') }}</div>
    @endif
    @if (Session::has('success'))
        <div class="alert alert-success" role="alert">{{ Session::get('success', '') }}</div>
    @endif
    @if (isset(Auth::user()->profile->admin) || isset(Auth::user()->profile->student) || isset(Auth::user()->profile->supervisor))
    <a class="btn btn-primary" href="{{route('session.create')}}" role="button">Add Session</a>
    @endif
    <div class="card shadow">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <p class="text-primary m-0 fw-bold">Session Listing</p>
                </div>
                <div class="col-md-6">
                    <input class="form-control" id="myInput" type="text" placeholder="Search..">
                </div>
            </div>
            <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link active" href="" disabled>Upcoming</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('session.indexPast')}}">Past</a>
                </li>
            </ul>
        </div>
        <div class="card-body">
            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                <table class="table my-0" id="dataTable">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Type</th>
                            <th>Date</th>
                            <th>Student</th>
                            <th>Student Matrix No.</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody id="myTable">
                        @foreach ($sessions as $row)
                        <tr>
                            <td>{{ $row->title }}</td>
                            <td>
                                @if($row->session_type == 1)
                                    Proposal Defence
                                @elseif($row->session_type == 2)
                                    Rigorous Assessment
                                @endif
                            </td>
                            <td>{{ $row->date }}</td>
                            <td>{{ $row->student->profile->name }}</td>
                            <td>{{ $row->student->profile->user->username }}</td>
                            <td>
                                <div class="btn-group" role="group">
                                    <a class="btn btn-primary" href="{{route('session.view',$row)}}" role="button">View</a>
                                    @if ( (isset(Auth::user()->profile->admin) || isset(Auth::user()->profile->student) || isset(Auth::user()->profile->supervisor))
                                    AND ($row->examiner1->profile->user->id != Auth::user()->id AND $row->examiner2->profile->user->id != Auth::user()->id AND $row->chairperson->profile->user->id != Auth::user()->id) )
                                    <a class="btn btn-primary" href="{{route('session.edit',$row)}}" role="button">Edit</a>
                                    <a role="button" class="btn btn-primary"
                                        data-bs-toggle="modal"
                                        data-bs-target="#deleteModal"
                                        data-bs-title="{{$row->title}}"
                                        data-bs-link="{{route('session.destroy',$row)}}"
                                    >
                                        Delete
                                    </a>
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
                        {!! $sessions->links() !!}
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
        <a class="btn btn-primary" href="" role="button">Delete</a>
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
          var title = button.getAttribute('data-bs-title')
          // If necessary, you could initiate an AJAX request here
          // and then do the updating in a callback.
          //
          // Update the modal's content.
          var modalBody = deleteModal.querySelector('.modal-body')
          var modalLink = deleteModal.querySelector('.modal-footer a')

          modalBody.textContent = 'Are you sure to remove ' + title + ' ?'
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
