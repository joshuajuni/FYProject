@extends('layouts.app')

@section('title', 'Blank')

@section('content')

<div class="container-fluid">
    <h3 class="text-dark mb-4">View Assessment</h3>
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
    @if ( $assessment->examiner->id == Auth::user()->profile->examiner->id)
    <a class="btn btn-primary" href="{{route('assessment.edit', $assessment)}}" role="button">Edit Assessment</a>
    @endif
    <div class="card shadow">
        <div class="card-header py-3">
            <p class="text-primary m-0 fw-bold">PROPOSAL DEFENCE EVALUATION</p>
        </div>
        <div class="card-body">
            <div class="mb-3">
                <label class="form-label" for="student_name">
                    <strong>Student Name</strong>
                </label>
                <input class="form-control" type="text" id="student_name" name="student_name" value="{{ $assessment->session->student->profile->name}}" disabled>
            </div>
            <div class="mb-3">
                <label class="form-label" for="student_matrix_no">
                    <strong>Student Matrix No.</strong>
                </label>
                <input class="form-control" type="text" id="student_matrix_no" name="student_matrix_no" value="{{ $assessment->session->student->profile->user->username}}" disabled>
            </div>
            <div class="mb-3">
                <label class="form-label" for="">
                    <strong>Research Title</strong>
                </label>
                <input class="form-control" type="text" id="" name="" value="{{ $assessment->session->proposal_title }}" disabled>
            </div>
            <div class="mb-3">
                <label class="form-label" for="">
                    <strong>Supervisor Name</strong>
                </label>
                <input class="form-control" type="text" id="" name="" value="{{ $assessment->session->student->supervisor->profile->name}}" disabled>
            </div>
            <div class="mb-3">
                <label class="form-label" for="">
                    <strong>Faculty</strong>
                </label>
                <input class="form-control" type="text" id="" name="" value="Faculty of Computer Science and Information Technology" disabled>
            </div>
            <div class="mb-3">
                <label class="form-label" for="">
                    <strong>Evaluator</strong>
                </label>
                <input class="form-control" type="text" id="" name="" value="{{ $assessment->examiner->profile->name}}" disabled>
            </div>
            <div class="mb-3">
                <label class="form-label" for="">
                    <strong>Evaluation Date</strong>
                </label>
                <input class="form-control" type="text" id="" name="" value="{{ $assessment->updated_at->toDateString()}}" disabled>
            </div>
        </div>
    </div>
    <div class="card shadow">
        <div class="card-header py-3">
            <p class="text-primary m-0 fw-bold">A. INTRODUCTION</p>
        </div>
        <div class="card-body">
            <form method="POST" action="">
            @csrf
                <!-- Hidden Form attributes -->
                <input class="form-control" type="text" id="examiner_id" name="examiner_id" value="{{ Auth::user()->profile->examiner->id}}" hidden>
                <input class="form-control" type="text" id="session_id" name="session_id" value="{{ $assessment->session->id }}" hidden>
            <div class="row">
                <div class="col-xl-8">
                    <label class="form-label" for="A1">
                        <strong>1. The introduction consists of an adequate introductory discussion of the problem</strong>
                    </label>
                </div>
                <div class="col-xl-4 text-center">
                    @for ($i = 5; $i >= 1; $i--)
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="A1" id="A1" value="{{ $i }}"
                        <?php if ($assessment->data->A1 == $i ): ?>
                            checked
                        <?php endif ?> disabled>
                        <label class="form-check-label" for="A1">{{ $i }}</label>
                    </div>
                    @endfor
                </div>
            </div>
            <div class="row">
                <div class="col-xl-8">
                    <label class="form-label" for="A2">
                        <strong>2. The problem statement is clearly explained</strong>
                    </label>
                </div>
                <div class="col-xl-4 text-center">
                    @for ($i = 5; $i >= 1; $i--)
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="A2" id="A2" value="{{ $i }}"
                        <?php if ($assessment->data->A2 == $i ): ?>
                            checked
                        <?php endif ?> disabled>
                        <label class="form-check-label" for="A2">{{ $i }}</label>
                    </div>
                    @endfor
                </div>
            </div>
            <div class="row">
                <div class="col-xl-8">
                    <label class="form-label" for="A3">
                        <strong>3. The Literature Review is comprehensively done and only stated research works relevant to the study</strong>
                    </label>
                </div>
                <div class="col-xl-4 text-center">
                    @for ($i = 5; $i >= 1; $i--)
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="A3" id="A3" value="{{ $i }}"
                        <?php if ($assessment->data->A3 == $i ): ?>
                            checked
                        <?php endif ?> disabled>
                        <label class="form-check-label" for="A3">{{ $i }}</label>
                    </div>
                    @endfor
                </div>
            </div>
            <div class="row">
                <div class="col-xl-8">
                    <label class="form-label" for="A4">
                        <strong>4. The knowledge gap of the study is clearly and specifically stated to justify the need to conduct such study</strong>
                    </label>
                </div>
                <div class="col-xl-4 text-center">
                    @for ($i = 5; $i >= 1; $i--)
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="A4" id="A4" value="{{ $i }}"
                        <?php if ($assessment->data->A4 == $i ): ?>
                            checked
                        <?php endif ?> disabled>
                        <label class="form-check-label" for="A4">{{ $i }}</label>
                    </div>
                    @endfor
                </div>
            </div>
            <div class="row">
                <div class="col-xl-8">
                    <label class="form-label" for="A5">
                        <strong>5. The aims/ purposes or objectives were thoroughly presented</strong>
                    </label>
                </div>
                <div class="col-xl-4 text-center">
                    @for ($i = 5; $i >= 1; $i--)
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="A5" id="A5" value="{{ $i }}"
                        <?php if ($assessment->data->A5 == $i ): ?>
                            checked
                        <?php endif ?> disabled>
                        <label class="form-check-label" for="A5">{{ $i }}</label>
                    </div>
                    @endfor
                </div>
            </div> 
        </div>
        <div class="card-footer">
            <div class="row">
                <div class="col-xl-8 text-end">
                    <strong>PART A: TOTAL</strong>
                </div>
                <div class="col-xl-4 text-center">
                    <strong>{{$assessment->data->A_TOTAL}}/25</strong>
                </div>
            </div>
        </div>
    </div>
    <div class="card shadow">
        <div class="card-header py-3">
            <p class="text-primary m-0 fw-bold">B. LITERATURE REVIEW AND CONCEPTUAL FRAMEWORK</p>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-xl-8">
                    <label class="form-label" for="B1">
                        <strong>1. Cited literature and studies are adequate and relevant to the research problem</strong>
                    </label>
                </div>
                <div class="col-xl-4 text-center">
                    @for ($i = 5; $i >= 1; $i--)
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="B1" id="B1" value="{{ $i }}"
                        <?php if ($assessment->data->B1 == $i ): ?>
                            checked
                        <?php endif ?> disabled>
                        <label class="form-check-label" for="B1">{{ $i }}</label>
                    </div>
                    @endfor
                </div>
            </div>
            <div class="row">
                <div class="col-xl-8">
                    <label class="form-label" for="B2">
                        <strong>2. Related literature and studies are recent (five years ago to present year of the study)</strong>
                    </label>
                </div>
                <div class="col-xl-4 text-center">
                    @for ($i = 5; $i >= 1; $i--)
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="B2" id="B2" value="{{ $i }}"
                        <?php if ($assessment->data->B2 == $i ): ?>
                            checked
                        <?php endif ?> disabled>
                        <label class="form-check-label" for="B2">{{ $i }}</label>
                    </div>
                    @endfor
                </div>
            </div>
            <div class="row">
                <div class="col-xl-8">
                    <label class="form-label" for="B3">
                        <strong>3. Foreign literature, studies, literature and local studies are present</strong>
                    </label>
                </div>
                <div class="col-xl-4 text-center">
                    @for ($i = 5; $i >= 1; $i--)
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="B3" id="B3" value="{{ $i }}"
                        <?php if ($assessment->data->B3 == $i ): ?>
                            checked
                        <?php endif ?> disabled>
                        <label class="form-check-label" for="B3">{{ $i }}</label>
                    </div>
                    @endfor
                </div>
            </div>
            <div class="row">
                <div class="col-xl-8">
                    <label class="form-label" for="B4">
                        <strong>4. Synthesis of the reviewed literature and studies is well-organized, concise (not too long nor too short) and is based on the students’ logical analysis of the cited materials</strong>
                    </label>
                </div>
                <div class="col-xl-4 text-center">
                    @for ($i = 5; $i >= 1; $i--)
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="B4" id="B4" value="{{ $i }}"
                        <?php if ($assessment->data->B4 == $i ): ?>
                            checked
                        <?php endif ?> disabled>
                        <label class="form-check-label" for="B4">{{ $i }}</label>
                    </div>
                    @endfor
                </div>
            </div>
            <div class="row">
                <div class="col-xl-8">
                    <label class="form-label" for="B5">
                        <strong>5. The sources of the cited literatures and studies are appropriately acknowledged and or credited</strong>
                    </label>
                </div>
                <div class="col-xl-4 text-center">
                    @for ($i = 5; $i >= 1; $i--)
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="B5" id="B5" value="{{ $i }}"
                        <?php if ($assessment->data->B5 == $i ): ?>
                            checked
                        <?php endif ?> disabled>
                        <label class="form-check-label" for="B5">{{ $i }}</label>
                    </div>
                    @endfor
                </div>
            </div>
            <div class="row">
                <div class="col-xl-8">
                    <label class="form-label" for="B6">
                        <strong>6. The student is able to determine the variables of the study from the theory presented</strong>
                    </label>
                </div>
                <div class="col-xl-4 text-center">
                    @for ($i = 5; $i >= 1; $i--)
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="B6" id="B6" value="{{ $i }}"
                        <?php if ($assessment->data->B6 == $i ): ?>
                            checked
                        <?php endif ?> disabled>
                        <label class="form-check-label" for="B6">{{ $i }}</label>
                    </div>
                    @endfor
                </div>
            </div>
            <div class="row">
                <div class="col-xl-8">
                    <label class="form-label" for="B7">
                        <strong>7. The framework presented conceptualizes the concepts of the theory appropriately</strong>
                    </label>
                </div>
                <div class="col-xl-4 text-center">
                    @for ($i = 5; $i >= 1; $i--)
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="B7" id="B7" value="{{ $i }}"
                        <?php if ($assessment->data->B7 == $i ): ?>
                            checked
                        <?php endif ?> disabled>
                        <label class="form-check-label" for="B7">{{ $i }}</label>
                    </div>
                    @endfor
                </div>
            </div>
        </div>
        <div class="card-footer">
            <div class="row">
                <div class="col-xl-8 text-end">
                    <strong>PART B: TOTAL</strong>
                </div>
                <div class="col-xl-4 text-center">
                    <strong>{{$assessment->data->B_TOTAL}}/35</strong>
                </div>
            </div>
        </div>
    </div>
    <div class="card shadow">
        <div class="card-header py-3">
            <p class="text-primary m-0 fw-bold">C. RESEARCH DESIGN AND METHOD</p>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-xl-8">
                    <label class="form-label" for="C1">
                        <strong>1. The research methodology is well-described and is suitable or fitting to the research problem</strong>
                    </label>
                </div>
                <div class="col-xl-4 text-center">
                    @for ($i = 5; $i >= 1; $i--)
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="C1" id="C1" value="{{ $i }}"
                        <?php if ($assessment->data->C1 == $i ): ?>
                            checked
                        <?php endif ?> disabled>
                        <label class="form-check-label" for="C1">{{ $i }}</label>
                    </div>
                    @endfor
                </div>
            </div>
            <div class="row">
                <div class="col-xl-8">
                    <label class="form-label" for="C2">
                        <strong>2. The procedure and or techniques of experiment/gathering data are explained in complete detail</strong>
                    </label>
                </div>
                <div class="col-xl-4 text-center">
                     @for ($i = 5; $i >= 1; $i--)
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="C2" id="C2" value="{{ $i }}"
                        <?php if ($assessment->data->C2 == $i ): ?>
                            checked
                        <?php endif ?> disabled>
                        <label class="form-check-label" for="C2">{{ $i }}</label>
                    </div>
                    @endfor
                </div>
            </div>
            <div class="row">
                <div class="col-xl-8">
                    <label class="form-label" for="C3">
                        <strong>3. The research design and method employed are correct and relevant to the fulfillment of the accurate results of the study</strong>
                    </label>
                </div>
                <div class="col-xl-4 text-center">
                     @for ($i = 5; $i >= 1; $i--)
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="C3" id="C3" value="{{ $i }}"
                        <?php if ($assessment->data->C3 == $i ): ?>
                            checked
                        <?php endif ?> disabled>
                        <label class="form-check-label" for="C3">{{ $i }}</label>
                    </div>
                    @endfor
                </div>
            </div>
            <div class="row">
                <div class="col-xl-8">
                    <label class="form-label" for="C4">
                        <strong>4. The research instrument is presented and discussed in terms of its validity and reliability</strong>
                    </label>
                </div>
                <div class="col-xl-4 text-center">
                    @for ($i = 5; $i >= 1; $i--)
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="C4" id="C4" value="{{ $i }}"
                        <?php if ($assessment->data->C4 == $i ): ?>
                            checked
                        <?php endif ?> disabled>
                        <label class="form-check-label" for="C4">{{ $i }}</label>
                    </div>
                    @endfor
                </div>
            </div>
            <div class="row">
                <div class="col-xl-8">
                    <label class="form-label" for="C5">
                        <strong>5. Analysis techniques are well explained and presented</strong>
                    </label>
                </div>
                <div class="col-xl-4 text-center">
                     @for ($i = 5; $i >= 1; $i--)
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="C5" id="C5" value="{{ $i }}"
                        <?php if ($assessment->data->C5 == $i ): ?>
                            checked
                        <?php endif ?> disabled>
                        <label class="form-check-label" for="C5">{{ $i }}</label>
                    </div>
                    @endfor
                </div>
            </div>
        </div>
        <div class="card-footer">
            <div class="row">
                <div class="col-xl-8 text-end">
                    <strong>PART C: TOTAL</strong>
                </div>
                <div class="col-xl-4 text-center">
                    <strong>{{$assessment->data->C_TOTAL}}/25</strong>
                </div>
            </div>
        </div>
    </div>
    <div class="card shadow">
        <div class="card-header py-3">
            <p class="text-primary m-0 fw-bold">D. OTHERS</p>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-xl-8">
                    <label class="form-label" for="D1">
                        <strong>1. Originality</strong>
                    </label>
                </div>
                <div class="col-xl-4 text-center">
                    @for ($i = 5; $i >= 1; $i--)
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="D1" id="D1" value="{{ $i }}"
                        <?php if ($assessment->data->D1 == $i ): ?>
                            checked
                        <?php endif ?> disabled>
                        <label class="form-check-label" for="D1">{{ $i }}</label>
                    </div>
                    @endfor
                </div>
            </div>
            <div class="row">
                <div class="col-xl-8">
                    <label class="form-label" for="D2">
                        <strong>2. Presentation</strong>
                    </label>
                </div>
                <div class="col-xl-4 text-center">
                    @for ($i = 5; $i >= 1; $i--)
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="D2" id="D2" value="{{ $i }}"
                        <?php if ($assessment->data->D2 == $i ): ?>
                            checked
                        <?php endif ?> disabled>
                        <label class="form-check-label" for="D2">{{ $i }}</label>
                    </div>
                    @endfor
                </div>
            </div>
            <div class="row">
                <div class="col-xl-8">
                    <label class="form-label" for="D3">
                        <strong>3. Commitment</strong>
                    </label>
                </div>
                <div class="col-xl-4 text-center">
                    @for ($i = 5; $i >= 1; $i--)
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="D3" id="D3" value="{{ $i }}"
                        <?php if ($assessment->data->D3 == $i ): ?>
                            checked
                        <?php endif ?> disabled>
                        <label class="form-check-label" for="D3">{{ $i }}</label>
                    </div>
                    @endfor
                </div>
            </div>
        </div>
        <div class="card-footer">
            <div class="row">
                <div class="col-xl-8 text-end">
                    <strong>PART D: TOTAL</strong>
                </div>
                <div class="col-xl-4 text-center">
                    <strong>{{$assessment->data->D_TOTAL}}/15</strong>
                </div>
            </div>
            </form>
        </div>
    </div>
    <div class="card shadow">
        <div class="card-header py-3">
            <p class="text-primary m-0 fw-bold">OVERALL MARK</p>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-xl-8 text-end">
                    <strong>(PART A + PART B + PART C + PART D)</strong>
                </div>
                <div class="col-xl-4 text-center">
                    <strong>{{$assessment->data->OVERALL_MARK}}/100</strong>
                </div>
            </div>
        </div>
        <div class="card-footer">
            
        </div>
    </div>
</div>

@endsection
