@extends('layouts.app')

@section('title', 'Table')

@section('content')

<div class="container-fluid">
    <h3 class="text-dark mb-4">Assessment</h3>
    <div class="card shadow">
        <div class="card-header py-3">
            <p class="text-primary m-0 fw-bold">Assessment Info</p>
        </div>
        <div class="card-body">
            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                <table class="table my-0" id="dataTable">
                    <thead>
                        <tr>
                            <th>Session Title</th>
                            <th>Student Name</th>
                            <th>Student Matrix No</th>
                            <th>Examiner Name</th>
                            <th>Comment</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($assessments as $row)
                        <tr>
                            <td>{{$row->session->title}}</td>
                            <td>{{$row->session->student->profile->name}}</td>
                            <td>{{$row->session->student->profile->user->username}}</td>
                            <td>{{$row->examiner->profile->name}}</td>
                            <td>{{$row->comments}}</td>
                            <td>
                                <div class="btn-group" role="group">
                                    <a class="btn btn-primary" href="{{route('assessment.view',$row)}}" role="button">View</a>
                                    <!-- <a class="btn btn-primary" href="{{route('assessment.edit',$row)}}" role="button">Edit</a> -->
                                    <a role="button" class="btn btn-primary"
                                        data-bs-toggle="modal"
                                        data-bs-target="#deleteModal"
                                        data-bs-examinerName="{{$row->examiner->profile->name}}"
                                        data-bs-link="{{route('assessment.destroy',$row)}}"
                                    >
                                        Delete
                                    </a>
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
          var examinerName = button.getAttribute('data-bs-examinerName')
          // If necessary, you could initiate an AJAX request here
          // and then do the updating in a callback.
          //
          // Update the modal's content.
          var modalBody = deleteModal.querySelector('.modal-body')
          var modalLink = deleteModal.querySelector('.modal-footer a')

          modalBody.textContent = 'Are you sure to remove assessment by ' + examinerName + ' ?'
          modalLink.href = link

        })
    </script>

@endsection
