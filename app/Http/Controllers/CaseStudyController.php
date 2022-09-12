<?php

namespace App\Http\Controllers;

use App\Models\CaseStudy;
use Illuminate\Http\Request;

class CaseStudyController extends Controller
{


    public function getMore($num)
    {
        $caseStudyFirstRows = CaseStudy::orderBy('id', 'asc')->skip(3 * $num)->take(3)->get();
        $caseStudySecondRows = CaseStudy::orderBy('id', 'asc')->skip(3 * $num + 1)->take(3)->get();

        return response()->json([

            'caseStudyFirstRows' => $caseStudyFirstRows,
            'caseStudySecondRows' => $caseStudySecondRows,

        ]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getAll()
    {
        $case_studies = CaseStudy::all();

        return response()->json($case_studies);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $case_studies = CaseStudy::all();

        return response()->json($case_studies);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $case_study = CaseStudy::find($id);

        return response()->json($case_study);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate the input
        $request->validate([
            'name' => 'required',
            'image' => 'required|image'
        ]);

        $case_study = new CaseStudy();
        $case_study->com_name = $request->name;

        if ($request->image) {

            $fileName = time() . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('assets/img/case_study'), $fileName);
            $case_study->com_image = $fileName;
        }


        $save = $case_study->save();

        if ($save) {
            return response()->json(['success' => 'You have successfully create Case Study.']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CaseStudy  $caseStudy
     * @return \Illuminate\Http\Response
     */
    public function show(CaseStudy $caseStudy)
    {
        return view('admin.case-study');
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CaseStudy  $caseStudy
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required|image'
        ]);

        $case_study = CaseStudy::find($request->id);
        $case_study->com_name = $request->name;

        if ($request->image) {

            $fileName = time() . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('assets/img/case_study'), $fileName);
            $case_study->com_image = $fileName;
        }


        $update = $case_study->save();

        if ($update) {
            return response()->json(['success' => 'You have successfully update Case Study.']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CaseStudy  $caseStudy
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, CaseStudy $caseStudy)
    {
        $caseStudy = CaseStudy::find($id);

        $delete = $caseStudy->delete();

        if ($delete) {
            return response()->json(['success' => 'You have successfully delete Case Study.']);
        }
    }
}
