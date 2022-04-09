<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use App\Models\Profile;
use App\Models\Student;
use App\Models\Supervisor;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        return view('users.student.index')->with('students', $students);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $supervisors = Supervisor::all();
        return view('users.student.create')->with('supervisors', $supervisors);
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
            if(isset($profile->student)){
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
                $student  =   Student::create($request->all());
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
            $student  =   Student::create($request->all());
        }
        return redirect()->route('student.index')->with('success', 'Student created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function view(Student $student)
    {
        return view('users.student.view')->with('student', $student);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        $supervisors = Supervisor::all();
        return view('users.student.edit')->with('student', $student)->with('supervisors', $supervisors);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        if ($request->email != $student->profile->user->email) {
            $request->validate([
                    'email' => 'unique:users,email'
                ]);
        }
        $student->update($request->all());
        $student->profile->update($request->all());
        $student->profile->user->update($request->all());
        return redirect()->route('student.index')->with('success', 'Student updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->back()->with('success', 'Student deleted successfully!');
    }
}
