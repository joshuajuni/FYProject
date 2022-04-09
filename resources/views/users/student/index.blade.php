@extends('layouts.app')

@section('title', 'Student Listing')

@section('content')

<div class="container-fluid">
    <h3 class="text-dark mb-4">Student</h3>
    @if (Session::has('error'))
        <div class="alert alert-danger" role="alert">{{ Session::get('error', '') }}</div>
    @endif
    @if (Session::has('success'))
        <div class="alert alert-success" role="alert">{{ Session::get('success', '') }}</div>
    @endif
    <a class="btn btn-primary" href="{{route('student.create')}}" role="button">Add Student</a>
    <div class="card shadow">
        <div class="card-header py-3">
            <p class="text-primary m-0 fw-bold">Student Listing</p>
        </div>
        <div class="card-body">
            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                <table class="table my-0" id="dataTable">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Matrix No.</th>
                            <th>Email</th>
                            <th>Supervisor</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($students as $row)
                        <tr>
                            <td>{{ $row->profile->name }}</td>
                            <td>{{ $row->profile->user->username }}</td>
                            <td>{{ $row->profile->user->email }}</td>
                            <td>{{ $row->supervisor->profile->name }}</td>
                            <td>
                                <div class="btn-group" role="group">
                                    <a class="btn btn-primary" href="{{route('student.view',$row->profile->student)}}" role="button">View</a>
                                    <a class="btn btn-primary" href="{{route('student.edit',$row->profile->student)}}" role="button">Edit</a>
                                    <a role="button" class="btn btn-primary"
                                        data-bs-toggle="modal"
                                        data-bs-target="#deleteModal"
                                        data-bs-name="{{$row->profile->name}}"
                                        data-bs-link="{{route('student.destroy',$row->profile->student)}}"
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
        <h5 class="modal-title" id="deleteModalLabel">Comfirmation</h5>
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
          var name = button.getAttribute('data-bs-name')
          // If necessary, you could initiate an AJAX request here
          // and then do the updating in a callback.
          //
          // Update the modal's content.
          var modalBody = deleteModal.querySelector('.modal-body')
          var modalLink = deleteModal.querySelector('.modal-footer a')

          modalBody.textContent = 'Are you sure to remove ' + name + ' as student?'
          modalLink.href = link

        })
    </script>

@endsection
