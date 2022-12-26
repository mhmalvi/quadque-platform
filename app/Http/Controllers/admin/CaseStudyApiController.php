<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CaseStudy;

class CaseStudyApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return CaseStudy::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required',
            'image' => 'required|image'
        ]);

        if ($request->image) {

            $fileName = time() . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('assets/img/case_study'), $fileName);
            // $case_study->com_image = $fileName;
        }

        CaseStudy::create([
            'com_name' => $request->name,
            'com_image' => $fileName
        ]);
        return response()->json([
            'name' => $request->name,
            'image' => $fileName
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return CaseStudy::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        // dd($request);
        // $request->validate([
        //     'name' => 'required',
        //     'image' => 'required|image'
        // ]);


        // dd($request->all());
        // $request->validate([
        //     'name' => 'required',
        //     'image' => 'required|image'
        // ]);

        $case_study = CaseStudy::find($id);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $case_study = CaseStudy::find($id);
        $case_study->delete();
        return response()->json([
            'success' => "true",
            'message' => "deleted successfully"
        ]);
    }
}
