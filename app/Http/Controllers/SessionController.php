<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Session;
use App\Models\Student;
use App\Models\Examiner;
use Auth;

class SessionController extends Controller
{
    public function index()
    {
        $sessions = Session::all();
        return view('session.index')->with('sessions', $sessions);
    }

    public function create()
    {
        $students = Student::all();
        $examiners = Examiner::all();
        return view('session.create')->with('students', $students)->with('examiners', $examiners);
    }

    public function store(Request $request)
    {
        // return $request;
        if ($request->examiner1_id == $request->examiner2_id) {
            return back()->withErrors(['msg' => 'Examiner 1 and Examiner 2 cannot be the same']);
        }
        $request->merge(['created_by' => Auth::user()->id]);
        Session::create($request->all());
        return redirect()->route('session.index')->with('success', 'Session created successfully!');
    }

    public function view(Session $session)
    {
        $examinerIDs = $session->assessment->pluck('examiner_id'); //id of examiner that has done assessment
        // return $examinerIDs;
        return view('session.view')->with('session', $session)->with('examinerIDs', $examinerIDs);
    }

    public function edit(Session $session)
    {
        $students = Student::all();
        $examiners = Examiner::all();
        return view('session.edit')->with('students', $students)->with('examiners', $examiners)->with('session', $session);
    }

    public function update(Request $request, Session $session)
    {
        $session->update($request->all());
        return redirect()->route('session.index')->with('success', 'Session updated successfully!');
    }

    public function destroy(Session $session)
    {
        $session->delete();
        return redirect()->back()->with('success', 'Session deleted successfully!');
    }
}
