<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use App\Models\Profile;
use App\Models\Examiner;
use Auth;

class ExaminerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $examiners = Examiner::where('is_active', true)->paginate(10);
        return view('users.examiner.index')->with('examiners', $examiners);
    }

    public function indexInactive()
    {
        $examiners = Examiner::where('is_active', false)->paginate(10);
        return view('users.examiner.indexInactive')->with('examiners', $examiners);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.examiner.create');
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
            if(isset($profile->examiner)){
                Session::flash('error', 'Email has already been taken');
                return back()->withInput();
            }else if(isset($profile->admin)){
                Session::flash('error', 'Entered email has a admin profile, please user another email');
                return back()->withInput();
            }else if(isset($profile->student)){
                Session::flash('error', 'Entered email has a student profile, please user another email');
                return back()->withInput();
            }else{
                if (isset($request->password)) {
                    $request->validate([
                        'password' => 'required|confirmed|min:6',
                        'username' => 'unique:users,username'
                    ]);
                    $request->merge(['password' => Hash::make($request->password)]);
                }
                $profile->update($request->all());
                $profile->user->update($request->all());
                $request->merge(['profile_id' => $profile->id]);
                $examiner  =   Examiner::create($request->all());
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
            $examiner  =   Examiner::create($request->all());
        }
        return redirect()->route('examiner.index')->with('success', 'Examiner created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function view(Examiner $examiner)
    {
        return view('users.examiner.view')->with('examiner', $examiner);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Examiner $examiner)
    {
        return view('users.examiner.edit')->with('examiner', $examiner);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Examiner $examiner)
    {
        if ($request->email != $examiner->profile->user->email) {
            $request->validate([
                    'email' => 'unique:users,email'
                ]);
        }
        $examiner->update($request->all());
        $examiner->profile->update($request->all());
        $examiner->profile->user->update($request->all());
        return redirect()->route('examiner.index')->with('success', 'Examiner updated successfully!');
    }

    /**
     * Make user unactive.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Examiner $examiner)
    {
        $examiner->update(['is_active' => false]);
        return redirect()->back()->with('success', 'Examiner deactivated successfully!');
    }

    /**
     * Make user active.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function makeActive(Examiner $examiner)
    {
        $examiner->update(['is_active' => true]);
        return redirect()->back()->with('success', 'Examiner is now active!');
    }
}
