@extends('layouts.app')

@section('title', 'Table')

@section('content')

<div class="container-fluid">
    <h3 class="text-dark mb-4">Session</h3>
    <a class="btn btn-primary" href="{{route('session.create')}}" role="button">Add Session</a>
    <div class="card shadow">
        <div class="card-header py-3">
            <p class="text-primary m-0 fw-bold">Session Listing</p>
        </div>
        <div class="card-body">
            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                <table class="table my-0" id="dataTable">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Venue</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Cedric Kelly</td>
                            <td>Senior JavaScript Developer</td>
                            <td>Edinburgh</td>
                            <td>22</td>
                            <td>
                                <div class="btn-group" role="group">
                                    <a class="btn btn-primary" href="{{route('session.view')}}" role="button">View</a>
                                    <a class="btn btn-primary" href="{{route('session.edit')}}" role="button">Edit</a>
                                    <a class="btn btn-primary" href="" role="button">Delete</a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr></tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection