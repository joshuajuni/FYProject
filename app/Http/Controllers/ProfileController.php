<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Profile;
use Auth;

class ProfileController extends Controller
{
    public function index()
    {
        return view('users.profile.index');
    }

    public function create()
    {
        //
    }

    public function store()
    {
        //
    }

    public function view()
    {
        //
    }

    public function edit()
    {
        return view('users.profile.edit');
    }

    public function update(Request $request)
    {
        Auth::user()->profile->update($request->all());
        return redirect()->route('profile.index')->with('success', 'Profile updated successfully!');
    }

    public function destroy()
    {
        //
    }
}
