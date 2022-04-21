<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Assessment;
use App\Models\Session;
use Auth;

class AssessmentController extends Controller
{
    public function index()
    {
        $assessments = Assessment::all();
        return view('assessment.index')->with('assessments', $assessments);
    }

    public function create(Session $session)
    {
        return view('assessment.create')->with('session', $session);
    }

    public function store(Request $request)
    {
        // return $request;
        Assessment::create($request->all());
        return redirect()->route('session.view', $request->session_id )->with('success', 'Session created successfully!');
    }

    public function view(Assessment $assessment)
    {
        return view('assessment.view')->with('assessment', $assessment);
    }

    public function edit(Assessment $assessment)
    {
        return view('assessment.edit')->with('assessment', $assessment);
    }

    public function update(Request $request, Assessment $assessment)
    {
        $assessment->update($request->all());
        return redirect()->route('assessment.view', $assessment)->with('success', 'Assessment updated successfully!');
    }

    public function destroy(Assessment $assessment)
    {
        $assessment->delete();
        return redirect()->back()->with('success', 'Assessment deleted successfully!');
    }
}
