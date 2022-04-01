@extends('layouts.app')

@section('title', 'Table')

@section('content')

<div class="container-fluid">
    <h3 class="text-dark mb-4">Assessment</h3>
    <button class="btn btn-primary" type="button">Add Assessment</button>
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
                            <th>Comment</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Test Title</td>
                            <td>Test Comment</td>
                            <td>Test Student</td>
                            <td>Test Student</td>
                            <td>
                                <div class="btn-group" role="group">
                                    <button class="btn btn-primary" type="button">View</button>
                                    <button class="btn btn-primary" type="button">Edit</button>
                                    <button class="btn btn-primary" type="button">Delete</button>
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