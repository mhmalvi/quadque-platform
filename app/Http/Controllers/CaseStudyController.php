<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\CaseStudy;
use Illuminate\Http\Request;

class CaseStudyController extends Controller
{

    public function desktopMoreCaseStudy()
    {

        $blogs = Blog::limit(2)->get();

        return view('user.components.caseStudyDetailsDesktop', compact('blogs'));
    }


    public function getMore($num)
    {
        $caseStudyFirstRows = CaseStudy::orderBy('id', 'asc')->skip(4 * $num)->take(4)->get();
        $caseStudySecondRows = CaseStudy::orderBy('id', 'asc')->skip(4 * $num + 1)->take(4)->get();




        $firstRows = '';
        if (isset($caseStudyFirstRows)) {
            foreach ($caseStudyFirstRows as $caseStudyFirstRow) {

                $firstRows .= '<li> <div class="case-study-box dji">';
                $firstRows .= '<div class="case-study-img">';
                $firstRows .= '<a href="' . url('desktop/casestudy/details') . '">';
                $firstRows .= '<img src="' . asset('/assets/img/case_study/' . $caseStudyFirstRow->com_image) . '" />';
                $firstRows .= '</a></div><div class="case-study-text">';
                $firstRows .= $caseStudyFirstRow->com_name;
                $firstRows .= ' </div></div></li>';
            }
        }

        // second rows 
        $secondRows = '';
        if (isset($caseStudySecondRows)) {
            foreach ($caseStudySecondRows as $caseStudySecondRow) {
                $secondRows .= ` <li>
                                                        <div class="case-study-box dji">
                                                            <div class="case-study-img">
                                                             <a href="{{ url('desktop/casestudy/details') }}">
 
                                                                     <img src="{{ asset('/assets/img/case_study/'.$caseStudySecondRow->com_image) }} " />

                                                             </a>
                                                              
                                                            </div>
                                                            <div class="case-study-text">
                                                                {{ $caseStudySecondRow->com_name }}
                                                            </div>
                                                        </div>
                                                    </li>`;
            }
        }



        return response()->json([

            'caseStudyFirstRows' => $firstRows,
            'caseStudySecondRows' => $secondRows,

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
