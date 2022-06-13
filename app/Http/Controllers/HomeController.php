<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\Session;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //return Auth::user();
        if (isset(Auth::user()->profile->admin)) {
            $sessions = Session::where('date', '>=', Carbon::today())
                        ->orderBy('date')
                        ->get();
        }elseif (isset(Auth::user()->profile->supervisor) AND isset(Auth::user()->profile->examiner)) {
            $students = Auth::user()->profile->supervisor->students->pluck('id');
            $sessions = Session::where('date', '>=', Carbon::today())
                        ->where(function($query) {
                            $query->whereIn('student_id', $students)
                            ->orWhere('examiner1_id', Auth::user()->profile->examiner->id)
                            ->orWhere('examiner2_id', Auth::user()->profile->examiner->id)
                            ->orWhere('chairperson_id', Auth::user()->profile->examiner->id);
                        })
                        ->orderBy('date')
                        ->get();
        }elseif (isset(Auth::user()->profile->supervisor)) {
            $students = Auth::user()->profile->supervisor->students->pluck('id');
            $sessions = Session::where('date', '>=', Carbon::today())
                        ->whereIn('student_id', $students)
                        ->orderBy('date')
                        ->get();
        }elseif (isset(Auth::user()->profile->examiner)) {
            $sessions = Session::where('date', '>=', Carbon::today())
                        ->where(function($query) {
                            $query->where('examiner1_id', Auth::user()->profile->examiner->id)
                            ->orWhere('examiner2_id', Auth::user()->profile->examiner->id)
                            ->orWhere('chairperson_id', Auth::user()->profile->examiner->id);
                        })
                        ->orderBy('date')
                        ->get();
        }elseif (isset(Auth::user()->profile->student)) {
            $sessions = Session::where('date', '>=', Carbon::today())
                        ->where('student_id', Auth::user()->profile->student->id)
                        ->orderBy('date')
                        ->get();
        }
        return view('home')->with('sessions', $sessions);
    }
}
