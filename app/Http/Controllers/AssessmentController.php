<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Assessment;
use App\Models\Session;
use Auth;
use PDF;

class AssessmentController extends Controller
{
    public function index()
    {
        $assessments = Assessment::all();
        return view('assessment.index')->with('assessments', $assessments);
    }

    public function create(Session $session)
    {
        $examinerIDs = $session->assessment->pluck('examiner_id');
        if ( $examinerIDs->contains(Auth::user()->profile->examiner->id)) {
            return back()->with('error', 'Assessment already exist!');
        }else{
            if ($session->session_type == 1) {
                return view('assessment.proposalDefence.create')->with('session', $session);
            }elseif ($session->session_type == 2) {
                return view('assessment.rigorousAssessment.create')->with('session', $session);
            }
        }
    }

    public function store(Request $request)
    {
        // return $request;
        $session = Session::where('id', $request->session_id)->first();

        if ($session->session_type == 1) {
            $A_TOTAL       =  $request->A1+$request->A2+$request->A3+$request->A4+$request->A5;
            $B_TOTAL       =  $request->B1+$request->B2+$request->B3+$request->B4+$request->B5+$request->B6+$request->B7;
            $C_TOTAL       =  $request->C1+$request->C2+$request->C3+$request->C4+$request->C5;
            $D_TOTAL       =  $request->D1+$request->D2+$request->D3;
            $OVERALL_MARK  =  $A_TOTAL+$B_TOTAL+$C_TOTAL+$D_TOTAL;

            $request->merge([
                'A_TOTAL'       =>  $A_TOTAL,
                'B_TOTAL'       =>  $B_TOTAL,
                'C_TOTAL'       =>  $C_TOTAL,
                'D_TOTAL'       =>  $D_TOTAL,
                'OVERALL_MARK'  =>  $OVERALL_MARK
            ]);

            $data = json_encode($request->except('_token', 'examiner_id', 'session_id'));

        }elseif ($session->session_type == 2) {
            // 
        }
            

        $request->merge([
            'data'    => $data
        ]);

        Assessment::create($request->all());
        return redirect()->route('session.view', $request->session_id )->with('success', 'Assessment created successfully!');
    }

    public function view(Assessment $assessment)
    {
        if ($assessment->session->session_type == 1) {
            $assessment->data = json_decode($assessment->data);
            return view('assessment.proposalDefence.view')->with('assessment', $assessment);
        }elseif ($assessment->session->session_type == 2) {
            return view('assessment.rigorousAssessment.view')->with('assessment', $assessment);
        }
    }

    public function generate(Assessment $assessment)
    {
        if ($assessment->session->session_type == 1) {
            $assessment->data = json_decode($assessment->data);
            $view = view('assessment.proposalDefence.generate')->with('assessment', $assessment);
        }elseif ($assessment->session->session_type == 2) {
            $view = view('assessment.rigorousAssessment.generate')->with('assessment', $assessment);
        }
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('assessment.pdf');
        // return view('assessment.generate')->with('session', $session);
    }

    public function edit(Assessment $assessment)
    {
        if ($assessment->session->session_type == 1) {
            $assessment->data = json_decode($assessment->data);
            return view('assessment.proposalDefence.edit')->with('assessment', $assessment);
        }elseif ($assessment->session->session_type == 2) {
            return view('assessment.rigorousAssessment.edit')->with('assessment', $assessment);
        }
    }

    public function update(Request $request, Assessment $assessment)
    {
        if ($assessment->session->session_type == 1) {
            $A_TOTAL       =  $request->A1+$request->A2+$request->A3+$request->A4+$request->A5;
            $B_TOTAL       =  $request->B1+$request->B2+$request->B3+$request->B4+$request->B5+$request->B6+$request->B7;
            $C_TOTAL       =  $request->C1+$request->C2+$request->C3+$request->C4+$request->C5;
            $D_TOTAL       =  $request->D1+$request->D2+$request->D3;
            $OVERALL_MARK  =  $A_TOTAL+$B_TOTAL+$C_TOTAL+$D_TOTAL;

            $request->merge([
                'A_TOTAL'       =>  $A_TOTAL,
                'B_TOTAL'       =>  $B_TOTAL,
                'C_TOTAL'       =>  $C_TOTAL,
                'D_TOTAL'       =>  $D_TOTAL,
                'OVERALL_MARK'  =>  $OVERALL_MARK
            ]);

            $data = json_encode($request->except('_token', 'examiner_id', 'session_id'));
            
        }elseif ($assessment->session->session_type == 2) {
            // 
        }
            

        $request->merge([
            'data'    => $data
        ]);

        $assessment->update($request->all());
        return redirect()->route('assessment.view', $assessment)->with('success', 'Assessment updated successfully!');
    }

    public function destroy(Assessment $assessment)
    {
        $assessment->delete();
        return redirect()->back()->with('success', 'Assessment deleted successfully!');
    }
}
