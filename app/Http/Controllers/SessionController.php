<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Session;
use App\Models\Proposal;
use App\Models\Student;
use App\Models\Examiner;
use Auth;
use Notification;
use App\Notifications\NewSessionNotification;
use App\Notifications\SessionUpdateNotification;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

class SessionController extends Controller
{
    public function index()
    {
        if (isset(Auth::user()->profile->admin)) {
            $sessions = Session::all()->sortByDesc('date');
        }
        elseif (isset(Auth::user()->profile->supervisor)) {
            $students = Auth::user()->profile->supervisor->students->pluck('id');
            //return $students;
            $sessions = Session::whereIn('student_id',  $students)
                        ->orderBy('date')
                        ->get();
        }elseif (isset(Auth::user()->profile->examiner)) {
            $sessions = Session::where('examiner1_id', Auth::user()->profile->examiner->id)
                        ->orWhere('examiner2_id', Auth::user()->profile->examiner->id)
                        ->orWhere('chairperson_id', Auth::user()->profile->examiner->id)
                        ->orderBy('date')
                        ->get();
        }elseif (isset(Auth::user()->profile->student)) {
            $sessions = Session::where('student_id', Auth::user()->profile->student->id)
                        ->orderBy('date')
                        ->get();
        }
        return view('session.index')->with('sessions', $sessions);
    }

    public function create()
    {
        if (isset(Auth::user()->profile->student)) {
            $students = Student::where('id', Auth::user()->profile->student->id)->get();
        }else {
            $students = Student::where('is_active', true)->get();
        }
        $examiners = Examiner::where('is_active', true)->get();
        return view('session.create')->with('students', $students)->with('examiners', $examiners);
    }

    public function store(Request $request)
    {
        // return $request;
 
        if ($request->examiner1_id == $request->examiner2_id) {
            return back()->withErrors(['msg' => 'Examiner 1 and Examiner 2 cannot be the same']);
        }
        if ( ($request->examiner1_id == $request->chairperson_id) || ($request->examiner2_id == $request->chairperson_id)) {
            return back()->withErrors(['msg' => 'Chairperson cannot be one of the examiners']);
        }
        $request->merge(['created_by' => Auth::user()->id]);
        $session = Session::create($request->all());

        $path = $request->file('file')->storeAs('proposals', $session->student->profile->user->username.'_proposal.pdf', 'public');

        $request->merge([
            'session_id'    => $session->id,
            'title'         => $request->proposal_title,
            'path'          => $path
        ]);

        Proposal::create($request->all());

        $users = [
            $session->student->profile->user,
            $session->student->supervisor->profile->user,
            $session->examiner1->profile->user,
            $session->examiner2->profile->user,
            $session->chairperson->profile->user,
        ];

        $sessionData = [
            'title'     => $session->title,
            'url'       => url('session/view', $session->id)
        ];
        foreach ($users as $user) {
           // Notification::send($user, new NewSessionNotification($sessionData));
        }

        return redirect()->route('session.index')->with('success', 'Session created successfully!');
    }

    public function view(Session $session)
    {
        $examinerIDs = $session->assessment->pluck('examiner_id'); //id of examiner that has done assessment
        return view('session.view')->with('session', $session)->with('examinerIDs', $examinerIDs);
    }

    public function edit(Session $session)
    {
        if (isset(Auth::user()->profile->student)) {
            $students = Student::where('id', Auth::user()->profile->student->id)->get();
        }else {
            $students = Student::where('is_active', true)->get();
        }
        $examiners = Examiner::where('is_active', true)->get();
        return view('session.edit')->with('students', $students)->with('examiners', $examiners)->with('session', $session);
    }

    public function update(Request $request, Session $session)
    {
        if ($request->examiner1_id == $request->examiner2_id) {
            return back()->withErrors(['msg' => 'Examiner 1 and Examiner 2 cannot be the same']);
        }
        if ( ($request->examiner1_id == $request->chairperson_id) || ($request->examiner2_id == $request->chairperson_id)) {
            return back()->withErrors(['msg' => 'Chairperson cannot be one of the examiners']);
        }
        $session->update($request->all());

        if (isset($request->file)) {
            $path = $request->file('file')->storeAs('proposals', $session->student->profile->user->username.'_proposal.pdf', 'public');

            Proposal::updateOrCreate(
                ['session_id'    => $session->id],
                [   
                    'title' => $request->proposal_title, 
                    'path'  => $path
                ]
            );
        }

        $users = [
            $session->student->profile->user,
            $session->student->supervisor->profile->user,
            $session->examiner1->profile->user,
            $session->examiner2->profile->user,
            $session->chairperson->profile->user,
        ];

        $sessionData = [
            'title'     => $session->title,
            'url'       => url('session/view', $session->id)
        ];
        foreach ($users as $user) {
           // Notification::send($user, new SessionUpdateNotification($sessionData));
        }
        return redirect()->route('session.index')->with('success', 'Session updated successfully!');
    }

    public function destroy(Session $session)
    {
        if (count($session->assessment) != 0 || Carbon::today()->toDateString() >= $session->date ) {
            return redirect()->back()->with('error', 'Unable to delete session');
        }else{
            if (isset($session->proposal)) {
                $session->proposal->delete();
            }
            $session->delete();
            return redirect()->back()->with('success', 'Session deleted successfully!');
        }
    }
}
