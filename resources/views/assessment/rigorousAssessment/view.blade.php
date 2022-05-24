@extends('layouts.app')

@section('title', 'VIEW REPORT OF RIGOROUS ASSESSMENT')

@section('content')

<div class="container-fluid">
    <h3 class="text-dark mb-4">VIEW REPORT OF RIGOROUS ASSESSMENT</h3>
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
    @if ( $assessment->examiner->profile->user->id == Auth::user()->id  )
    <a class="btn btn-primary" href="{{route('assessment.edit', $assessment)}}" role="button">Edit Assessment</a>
    @endif
    <div class="card shadow">
        <div class="card-header py-3">
            <p class="text-primary m-0 fw-bold">Part A: Applicant Details</p>
        </div>
        <div class="card-body">
            <div class="mb-3">
                <label class="form-label" for="student_name">
                    <strong>Full Name</strong>
                </label>
                <input class="form-control" type="text" id="student_name" name="student_name" value="{{ $assessment->session->student->profile->name}}" disabled>
            </div>
            <div class="mb-3">
                <label class="form-label" for="student_matrix_no">
                    <strong>Programme Applied</strong>
                </label>
                <br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="student_type" id="student_type" value="1"
                    <?php if ($assessment->session->student->type == 1 ): ?>
                        checked
                    <?php endif ?> disabled>
                    <label class="form-check-label" for="student_type"><strong>MSc</strong></label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="student_type" id="student_type" value="2"
                    <?php if ($assessment->session->student->type == 2 ): ?>
                        checked
                    <?php endif ?> disabled>
                    <label class="form-check-label" for="student_type">PhD</label>
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label" for="">
                    <strong>Title of Proposal</strong>
                </label>
                <input class="form-control" type="text" id="" name="" value="{{ $assessment->session->proposal_title }}" disabled>
            </div>
            <div class="mb-3">
                <label class="form-label" for="">
                    <strong>Potential Supervisor</strong>
                </label>
                <input class="form-control" type="text" id="" name="" value="{{ $assessment->session->student->supervisor->profile->name}}" disabled>
            </div>
        </div>
        <div class="card-header py-3">
            <p class="text-primary m-0 fw-bold">Part B: Evaluation of Proposal</p>
        </div>
        <div class="card-body">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <label class="form-label" for="B">
                        <strong>1. The overall quality of content</strong>
                    </label>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-xl-4">
                            <div class=" form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="B1I" id="B1I" value="1" 
                                <?php if ($assessment->data->B1I == 1 ): ?>
                                    checked
                                <?php endif ?> disabled>
                            <label class="form-check-label" for="B1I">Arguments are not clear/incorrect</label>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class=" form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="B1I" id="B1I" value="2" 
                                <?php if ($assessment->data->B1I == 2 ): ?>
                                    checked
                                <?php endif ?>disabled>
                            <label class="form-check-label" for="B1I">Arguments are partially clear and need to be refined</label>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class=" form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="B1I" id="B1I" value="3" 
                                <?php if ($assessment->data->B1I == 3 ): ?>
                                    checked
                                <?php endif ?> disabled>
                            <label class="form-check-label" for="B1I">Arguments are clearly presented</label>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-xl-4">
                            <div class=" form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="B1II" id="B1II" value="1" 
                                <?php if ($assessment->data->B1II == 1 ): ?>
                                    checked
                                <?php endif ?> disabled>
                            <label class="form-check-label" for="B1II">Problem statements are not clearly stated</label>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class=" form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="B1II" id="B1II" value="2"
                                <?php if ($assessment->data->B1II == 2 ): ?>
                                    checked
                                <?php endif ?> disabled>
                            <label class="form-check-label" for="B1II">Problem statements are adequate but need to be refined</label>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class=" form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="B1II" id="B1II" value="3"
                                <?php if ($assessment->data->B1II == 3 ): ?>
                                    checked
                                <?php endif ?> disabled>
                            <label class="form-check-label" for="B1II">Problem statements are clearly stated</label>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-xl-4">
                            <div class=" form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="B1III" id="B1III" value="1"
                                <?php if ($assessment->data->B1III == 1 ): ?>
                                    checked
                                <?php endif ?> disabled>
                            <label class="form-check-label" for="B1III">Objectives are not clearly defined</label>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class=" form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="B1III" id="B1III" value="2"
                                <?php if ($assessment->data->B1III == 2 ): ?>
                                    checked
                                <?php endif ?> disabled>
                            <label class="form-check-label" for="B1III">Objectives are clear but need to be refined</label>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class=" form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="B1III" id="B1III" value="3"
                                <?php if ($assessment->data->B1III == 3 ): ?>
                                    checked
                                <?php endif ?> disabled>
                            <label class="form-check-label" for="B1III">Objectives are well defined</label>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-xl-4">
                            <div class=" form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="B1IV" id="B1IV" value="1"
                                <?php if ($assessment->data->B1IV == 1 ): ?>
                                    checked
                                <?php endif ?> disabled>
                            <label class="form-check-label" for="B1IV">Does not reflect the understanding of subject matter and associated literature</label>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class=" form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="B1IV" id="B1IV" value="2"
                                <?php if ($assessment->data->B1IV == 2 ): ?>
                                    checked
                                <?php endif ?> disabled>
                            <label class="form-check-label" for="B1IV">Reflects understanding of subject matter and related literature</label>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class=" form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="B1IV" id="B1IV" value="3"
                                <?php if ($assessment->data->B1IV == 3 ): ?>
                                    checked
                                <?php endif ?> disabled>
                            <label class="form-check-label" for="B1IV">Exhibits mastery of subject matter and relevant literature</label>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-xl-4">
                            <div class=" form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="B1V" id="B1V" value="1"
                                <?php if ($assessment->data->B1V == 1 ): ?>
                                    checked
                                <?php endif ?> disabled>
                            <label class="form-check-label" for="B1V">Demonstrates an elementary understanding of theoretical concepts</label>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class=" form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="B1V" id="B1V" value="2"
                                <?php if ($assessment->data->B1V == 2 ): ?>
                                    checked
                                <?php endif ?> disabled>
                            <label class="form-check-label" for="B1V">Demonstrates an adequate knowledge of theoretical concepts</label>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class=" form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="B1V" id="B1V" value="3"
                                <?php if ($assessment->data->B1V == 3 ): ?>
                                    checked
                                <?php endif ?> disabled>
                            <label class="form-check-label" for="B1V">Demonstrates mastery of theoretical concepts</label>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-xl-4">
                            <div class=" form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="B1VI" id="B1VI" value="1"
                                <?php if ($assessment->data->B1VI == 1 ): ?>
                                    checked
                                <?php endif ?> disabled>
                            <label class="form-check-label" for="B1VI">The methodology is unorganised and lack of explanation</label>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class=" form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="B1VI" id="B1VI" value="2"
                                <?php if ($assessment->data->B1VI == 2 ): ?>
                                    checked
                                <?php endif ?> disabled>
                            <label class="form-check-label" for="B1VI">The methodology is adequately explained</label>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class=" form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="B1VI" id="B1VI" value="3"
                                <?php if ($assessment->data->B1VI == 3 ): ?>
                                    checked
                                <?php endif ?> disabled>
                            <label class="form-check-label" for="B1VI">The methodology is clearly explained and well organised</label>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <label for="B1comments" class="form-label">
                    <strong>Comments</strong>
                </label>
                <textarea class="ckeditor form-control" id="B1comments" name="B1comments" disabled>{!! $assessment->data->B1comments !!}</textarea>
                </li>
            </ul>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <label class="form-label" for="B">
                        <strong>2. The overall quality of writing</strong>
                    </label>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-xl-4">
                            <div class=" form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="B2I" id="B2I" value="1"
                                <?php if ($assessment->data->B2I == 1 ): ?>
                                    checked
                                <?php endif ?>  disabled>
                            <label class="form-check-label" for="B2I">Writing is weak</label>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class=" form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="B2I" id="B2I" value="2"
                                <?php if ($assessment->data->B2I == 2 ): ?>
                                    checked
                                <?php endif ?> disabled>
                            <label class="form-check-label" for="B2I">Writing is adequate</label>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class=" form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="B2I" id="B2I" value="3"
                                <?php if ($assessment->data->B2I == 3 ): ?>
                                    checked
                                <?php endif ?> disabled>
                            <label class="form-check-label" for="B2I">Writing is clear and effectively communicated idea</label>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-xl-4">
                            <div class=" form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="B2II" id="B2II" value="1"
                                <?php if ($assessment->data->B2II == 1 ): ?>
                                    checked
                                <?php endif ?> disabled>
                            <label class="form-check-label" for="B2II">Numerous grammatical and spelling errors apparent</label>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class=" form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="B2II" id="B2II" value="2"
                                <?php if ($assessment->data->B2II == 2 ): ?>
                                    checked
                                <?php endif ?> disabled>
                            <label class="form-check-label" for="B2II">Some grammatical and spelling errors apparent</label>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class=" form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="B2II" id="B2II" value="3"
                                <?php if ($assessment->data->B2II == 3 ): ?>
                                    checked
                                <?php endif ?> disabled>
                            <label class="form-check-label" for="B2II">No grammatical or spelling errors</label>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-xl-4">
                            <div class=" form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="B2III" id="B2III" value="1"
                                <?php if ($assessment->data->B2III == 1 ): ?>
                                    checked
                                <?php endif ?> disabled>
                            <label class="form-check-label" for="B2III">Organisation is poor</label>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class=" form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="B2III" id="B2III" value="2"
                                <?php if ($assessment->data->B2III == 2 ): ?>
                                    checked
                                <?php endif ?> disabled>
                            <label class="form-check-label" for="B2III">Organisation is logical</label>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class=" form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="B2III" id="B2III" value="3"
                                <?php if ($assessment->data->B2III == 3 ): ?>
                                    checked
                                <?php endif ?> disabled>
                            <label class="form-check-label" for="B2III">Organisation is excellent</label>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-xl-4">
                            <div class=" form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="B2IV" id="B2IV" value="1"
                                <?php if ($assessment->data->B2IV == 1 ): ?>
                                    checked
                                <?php endif ?> disabled>
                            <label class="form-check-label" for="B2IV">Reference format is problematic</label>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class=" form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="B2IV" id="B2IV" value="2"
                                <?php if ($assessment->data->B2IV == 2 ): ?>
                                    checked
                                <?php endif ?> disabled>
                            <label class="form-check-label" for="B2IV">Reference contains few formatting errors</label>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class=" form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="B2IV" id="B2IV" value="3"
                                <?php if ($assessment->data->B2IV == 3 ): ?>
                                    checked
                                <?php endif ?> disabled>
                            <label class="form-check-label" for="B2IV">Reference is well-formatted</label>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <label for="B1comments" class="form-label">
                    <strong>Comments</strong>
                </label>
                <textarea class="ckeditor form-control" id="B2comments" name="B2comments" disabled>{!! $assessment->data->B2comments !!}</textarea>
                </li>
            </ul>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <label class="form-label" for="B">
                        <strong>3. Did the applicant understand the subject matter?</strong>
                    </label>
                </li>
                <li class="list-group-item">
                    <label for="B1comments" class="form-label">
                    <strong>Comments</strong>
                </label>
                <textarea class="ckeditor form-control" id="B3comments" name="B3comments" disabled>{!! $assessment->data->B3comments !!}</textarea>
                </li>
            </ul>   
        </div>
        <div class="card-header py-3">
            <p class="text-primary m-0 fw-bold">Part C: Evaluation of Presentation</p>
        </div>
        <div class="card-body">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <label class="form-label" for="B">
                        <strong>1. Presentaion</strong>
                    </label>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-xl-4">
                            <div class=" form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="C1I" id="C1I" value="1"
                                <?php if ($assessment->data->C1I == 1 ): ?>
                                    checked
                                <?php endif ?> disabled>
                            <label class="form-check-label" for="C1I">Presentation unacceptable</label>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class=" form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="C1I" id="C1I" value="2"
                                <?php if ($assessment->data->C1I == 2 ): ?>
                                    checked
                                <?php endif ?> disabled>
                            <label class="form-check-label" for="C1I">Presentation acceptable</label>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class=" form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="C1I" id="C1I" value="3"
                                <?php if ($assessment->data->C1I == 3 ): ?>
                                    checked
                                <?php endif ?> disabled>
                            <label class="form-check-label" for="C1I">Presentation outstanding</label>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-xl-4">
                            <div class=" form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="C1II" id="C1II" value="1"
                                <?php if ($assessment->data->C1II == 1 ): ?>
                                    checked
                                <?php endif ?> disabled>
                            <label class="form-check-label" for="C1II">The presentation does not reflect well developed critical thinking skills</label>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class=" form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="C1II" id="C1II" value="2"
                                <?php if ($assessment->data->C1II == 2 ): ?>
                                    checked
                                <?php endif ?> disabled>
                            <label class="form-check-label" for="C1II">The presentation reveals above average critical thinking skills</label>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class=" form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="C1II" id="C1II" value="3"
                                <?php if ($assessment->data->C1II == 3 ): ?>
                                    checked
                                <?php endif ?> disabled>
                            <label class="form-check-label" for="C1II">The presentation reveals well developed critical thinking skills</label>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-xl-4">
                            <div class=" form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="C1III" id="C1III" value="1"
                                <?php if ($assessment->data->C1III == 1 ): ?>
                                    checked
                                <?php endif ?> disabled>
                            <label class="form-check-label" for="C1III">The presentation reveals critical weaknesses in-depth of knowledge in the subject matter</label>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class=" form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="C1III" id="C1III" value="2"
                                <?php if ($assessment->data->C1III == 2 ): ?>
                                    checked
                                <?php endif ?>  disabled>
                            <label class="form-check-label" for="C1III">The presentation reveals some depth of knowledge in the subject matter</label>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class=" form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="C1III" id="C1III" value="3"
                                <?php if ($assessment->data->C1III == 3 ): ?>
                                    checked
                                <?php endif ?>  disabled>
                            <label class="form-check-label" for="C1III">The presentation reveals an exceptional depth of subject knowledge</label>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="row">
                        <div class="col-xl-4">
                            <div class=" form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="C1IV" id="C1IV" value="1"
                                <?php if ($assessment->data->C1IV == 1 ): ?>
                                    checked
                                <?php endif ?>  disabled>
                            <label class="form-check-label" for="C1IV">Responses to questions are incomplete</label>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class=" form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="C1IV" id="C1IV" value="2"
                                <?php if ($assessment->data->C1IV == 2 ): ?>
                                    checked
                                <?php endif ?> disabled>
                            <label class="form-check-label" for="C1IV">Responses to questions are partially complete and require assistance</label>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class=" form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="C1IV" id="C1IV" value="3"
                                <?php if ($assessment->data->C1IV == 3 ): ?>
                                    checked
                                <?php endif ?> disabled>
                            <label class="form-check-label" for="C1IV">Responses are complete</label>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <label for="C1comments" class="form-label">
                    <strong>Comments</strong>
                </label>
                <textarea class="ckeditor form-control" id="C1comments" name="C1comments" disabled>{!! $assessment->data->C1comments !!}</textarea>
                </li>
            </ul> 
        </div>
        <div class="card-footer text-center">
        </div>
    </div>
</div>

@endsection
