<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use App\Models\Profile;
use App\Models\Supervisor;
use App\Models\Student;
use Auth;

class SupervisorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $supervisors = Supervisor::where('is_active', true)->paginate(10);
        return view('users.supervisor.index')->with('supervisors', $supervisors);
    }

    public function indexInactive()
    {
        $supervisors = Supervisor::where('is_active', false)->paginate(10);
        return view('users.supervisor.indexInactive')->with('supervisors', $supervisors);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.supervisor.create');
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
            if(isset($profile->supervisor)){
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
                $supervisor  =   Supervisor::create($request->all());
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
            $supervisor  =   Supervisor::create($request->all());
        }
        return redirect()->route('supervisor.index')->with('success', 'Supervisor created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function view(Supervisor $supervisor)
    {
        $students = Student::where('supervisor_id', $supervisor->id)->paginate(10);
        return view('users.supervisor.view')->with('supervisor', $supervisor)->with('students', $students);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Supervisor $supervisor)
    {
        return view('users.supervisor.edit')->with('supervisor', $supervisor);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Supervisor $supervisor)
    {
        if ($request->email != $supervisor->profile->user->email) {
            $request->validate([
                    'email' => 'unique:users,email'
                ]);
        }
        $supervisor->update($request->all());
        $supervisor->profile->update($request->all());
        $supervisor->profile->user->update($request->all());
        return redirect()->route('supervisor.index')->with('success', 'Supervisor updated successfully!');
    }

    /**
     * Make user unactive.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Supervisor $supervisor)
    {
        $supervisor->update(['is_active' => false]);
        return redirect()->back()->with('success', 'Supervisor deactivated successfully!');
    }
    
    /**
     * Make user active.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function makeActive(Supervisor $supervisor)
    {
        $supervisor->update(['is_active' => true]);
        return redirect()->back()->with('success', 'Supervisor is now active!');
    }
}
