@extends('layouts.app')

@section('title', 'Table')

@section('content')

<div class="container-fluid">
    <div class="d-sm-flex justify-content-between align-items-center mb-4">
        <h3 class="text-dark mb-0">Dashboard</h3>
    </div>
    <div class="row">
        <div class="col-lg-6 mb-4">
            <div class="card shadow mb-4"></div>
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="text-primary fw-bold m-0">Upcoming Sessions</h6>
                </div>
                <ul class="list-group list-group-flush">
                    @foreach($sessions as $row)
                    <a href="{{route('session.view',$row)}}">
                    <li class="list-group-item">
                        <div class="row align-items-center no-gutters">
                            <div class="col me-2">
                                <h6 class="mb-0"><strong>{{ $row->title }}</strong></h6>
                                <span class="text-xs">{{ date('l, d F Y', strtotime($row->date)) }}</span><br>
                                <span class="text-xs">{{ date('h:i a', strtotime($row->time)) }}</span>
                            </div>
                        </div>
                    </li>
                    </a>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>

@endsection