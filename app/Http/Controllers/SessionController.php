<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function index()
    {
        return view('session.index');
    }

    public function create()
    {
        return view('session.create');
    }

    public function store()
    {
        //
    }

    public function view()
    {
        return view('session.view');
    }

    public function edit()
    {
        return view('session.edit');
    }

    public function update()
    {
        //
    }

    public function destroy()
    {
        //
    }
}
