@extends('layouts.app')

@section('title', 'View Session')

@section('content')

<div class="container-fluid">
    <h3 class="text-dark mb-4">View Session</h3>
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
    @if ( (isset(Auth::user()->profile->admin) || isset(Auth::user()->profile->student) || isset(Auth::user()->profile->supervisor))
    AND ($session->examiner1->profile->user->id != Auth::user()->id AND $session->examiner2->profile->user->id != Auth::user()->id AND $session->chairperson->profile->user->id != Auth::user()->id) )
    <a class="btn btn-primary" href="{{route('session.edit', $session)}}" role="button">Edit Session</a>
    @endif
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
                    <input class="form-control" type="text" id="student_id" name="student_id" value="{{ $session->student->profile->name }} ({{ $session->student->profile->user->username }})" disabled>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="chairperson_id">
                        <strong>Chairperson</strong>
                    </label>
                    <input class="form-control" type="text" id="chairperson_id" name="examiner1_id" value="{{ $session->chairperson->profile->name }}" disabled>
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
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <div class="mb-3">
                            <label class="form-label" for="title">
                                <strong>Title</strong>
                            </label>
                            <input class="form-control" type="text" id="title" name="title" value="{{ $session->title }}" disabled>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <div class="mb-3">
                            <label class="form-label" for="session_type">
                                <strong>Session Type</strong>
                            </label>
                            <input class="form-control" type="text" id="session_type" name="session_type"
                            <?php if ($session->session_type == 1): ?>
                                value="Proposal Defence"
                            <?php elseif ($session->session_type == 2): ?>
                                value="Rigorous Assessment"
                            <?php endif ?>
                            disabled>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                	<label class="form-label" for="proposal_title">
                		<strong>Proposal Title</strong>
                	</label>
                	<input class="form-control" type="text" id="proposal_title" name="proposal_title" value="{{ $session->proposal_title }}" disabled>
                </div>
                <div class="mb-3">
                    <label for="file" class="form-label">
                        <strong>Proposal File</strong>
                    </label>
                    <div class="input-group">
                        <?php if (isset($session->proposal)): ?>
                        <a class="btn btn-outline-secondary" href="{{ asset('storage/'.$session->proposal->path) }}" target=”_blank” role="button">
                            <i class="fa fa-eye" aria-hidden="true"></i>
                            View File
                        </a>
                        <?php else: ?>
                            No files uploaded
                        <?php endif ?>
                    </div>
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

    <div class="card shadow">
        <div class="card-header py-3">
            <p class="text-primary m-0 fw-bold">Session's Assessment</p>
                @if ( 
                (($session->examiner1->profile->user->id == Auth::user()->id || $session->examiner2->profile->user->id == Auth::user()->id) AND !$examinerIDs->contains(Auth::user()->profile->examiner->id) AND $session->session_type == 1)
                OR
                ( $session->chairperson->profile->user->id == Auth::user()->id AND !$examinerIDs->contains(Auth::user()->profile->examiner->id) AND $session->session_type == 2)
                )
                <a class="btn btn-primary" href="{{route('assessment.create',$session)}}" role="button">Add Assessment</a>
                @endif
                @if ( 
                (($session->examiner1->profile->user->id == Auth::user()->id || $session->examiner2->profile->user->id == Auth::user()->id) AND $session->session_type == 1)
                OR
                ( $session->chairperson->profile->user->id == Auth::user()->id AND $session->session_type == 2)
                )
                <a class="btn btn-primary" href="{{route('assessment.generateBlank',$session)}}" role="button" target="_blank">Generate Assessment Form(Blank)</a>
                @endif
        </div>
        <div class="card-body">
            @if(count($session->assessment)>0)
            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                <table class="table my-0" id="dataTable">
                    <thead>
                        <tr>
                            <th>Examiner Name</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($session->assessment as $row)
                        <tr>
                            <td>{{ $row->examiner->profile->name }}</td>
                            <td class="text-center">
                                <div class="btn-group" role="group">
                                    <a class="btn btn-primary" href="{{route('assessment.view',$row)}}" role="button">View</a>
                                    @if ( $row->examiner->profile->user->id == Auth::user()->id)
                                    <a class="btn btn-primary" href="{{route('assessment.edit',$row)}}" role="button">Edit</a>
                                    <a role="button" class="btn btn-primary"
                                        data-bs-toggle="modal"
                                        data-bs-target="#deleteModal"
                                        data-bs-examinerName="{{$row->examiner->profile->name}}"
                                        data-bs-link="{{route('assessment.destroy',$row)}}"
                                    >
                                        Delete
                                    </a>
                                    <a class="btn btn-primary" role="button" href="{{route('assessment.generate',$row)}}" target="_blank">
                                        <i class="fas fa-download fa-sm text-white-50"></i>&nbsp;Generate Assessment PDF
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
            @else
            No assesment available
            @endif
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
