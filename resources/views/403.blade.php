@extends('layouts.app')

@section('title', 'Table')

@section('content')

<div class="container-fluid">
    <div class="text-center mt-5">
        <div class="error mx-auto" data-text="403">
            <p class="m-0">403</p>
        </div>
        <p class="text-dark mb-5 lead">Forbidden</p>
        <p class="text-black-50 mb-0">It looks like you dont have permission to this</p><a href="/">← Back to Dashboard</a>
    </div>
</div>

@endsection
