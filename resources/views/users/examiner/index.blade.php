@extends('layouts.app')

@section('title', 'Examiner Listing')

@section('content')

<div class="container-fluid">
    <h3 class="text-dark mb-4">Examiner Listing</h3>
    <a class="btn btn-primary" href="{{route('examiner.create')}}" role="button">Add Examiner</a>
    <div class="card shadow">
        <div class="card-header py-3">
            <p class="text-primary m-0 fw-bold">ESxaminer Listing</p>
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
                        <tr>
                            <td>Test Name</td>
                            <td>Test Username</td>
                            <td>Test Email</td>
                            <td>Test Phone No</td>
                            <td>
                                <div class="btn-group" role="group">
                                    <a class="btn btn-primary" href="{{route('examiner.view')}}" role="button">View</a>
                                    <a class="btn btn-primary" href="{{route('examiner.edit')}}" role="button">Edit</a>
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