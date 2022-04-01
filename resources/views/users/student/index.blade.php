@extends('layouts.app')

@section('title', 'Student Listing')

@section('content')

<div class="container-fluid">
    <h3 class="text-dark mb-4">Student</h3>
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
                            <th>Matrix No</th>
                            <th>Email</th>
                            <th>Phone No</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Test Name</td>
                            <td>Test Matrix No.</td>
                            <td>Test Email</td>
                            <td>Test Phone No</td>
                            <td>
                                <div class="btn-group" role="group">
                                    <a class="btn btn-primary" href="{{route('student.view')}}" role="button">View</a>
                                    <a class="btn btn-primary" href="{{route('student.edit')}}" role="button">Edit</a>
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