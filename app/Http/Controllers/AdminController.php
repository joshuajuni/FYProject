<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use App\Models\Profile;
use App\Models\Admin;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admins = Admin::all();
        return view('users.admin.index')->with('admins', $admins);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $existing_user_email = User::where('email', $request->email)->first();

        if (isset($existing_user_email)) {
            $profile = $existing_user_email->profile;
            if(isset($profile->admin)){
                Session::flash('error', 'Email has already been taken');
                return back()->withInput();
            }else{
                $request->validate([
                    'password' => 'required|confirmed|min:6',
                    'username' => 'unique:users,username'
                ]);
                $request->merge(['password' => Hash::make($request->password)]);
                $profile->update($request->all());
                $profile->user->update($request->all());
                $request->merge(['profile_id' => $profile->id]);
                $admin  =   Admin::create($request->all());
            }
        }else{
            $request->validate([
                'password' => 'required|confirmed|min:6',
                'username' => 'unique:users,username'
            ]);
            $request->merge(['password' => Hash::make($request->password)]);
            $user = User::create($request->all());
            $request->merge(['user_id' => $user->id]);
            $profile = Profile::create($request->all());
            $request->merge(['profile_id' => $profile->id]);
            $admin  =   Admin::create($request->all());
        }
        return redirect()->route('admin.index')->with('success', 'Admin created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function view(Admin $admin)
    {
        return view('users.admin.view')->with('admin', $admin);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        return view('users.admin.edit')->with('admin', $admin);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        $admin->delete();
        return redirect()->back()->with('success', 'Admin deleted successfully!');;
    }
}