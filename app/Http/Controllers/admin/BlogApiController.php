<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;

class BlogApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Blog::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'text' => 'required',
            'thumbnail' => 'required|image'
        ]);


        if ($request->thumbnail) {

            $fileName = time() . '.' . $request->thumbnail->getClientOriginalExtension();
            $request->thumbnail->move(public_path('assets/img/blogs'), $fileName);
        }


        $save = Blog::create([
            'title' => $request->title,
            'text' => $request->text,
            'thumbnail' => $fileName
        ]);

        if ($save) {
            return response()->json([

                'success' => 'Blog has been created successfully'

            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blog = Blog::find($id);

        return response()->json($blog);
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
        // $request->validate([
        //     'title' => 'required',
        //     'text' => 'required',
        //     'thumbnail' => 'required|image'
        // ]);

        $blog = Blog::find($id);

        $blog->title = $request->title;
        $blog->text = $request->text;

        if ($request->thumbnail) {

            $fileName = time() . '.' . $request->thumbnail->getClientOriginalExtension();
            $request->thumbnail->move(public_path('assets/img/blogs'), $fileName);
            $blog->thumbnail = $fileName;
        }

        $save = $blog->save();

        if ($save) {
            return response()->json([

                'success' => 'Blog has been updated successfully'

            ]);
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
        $blog = Blog::find($id);

        $delete = $blog->delete();

        if ($delete) {
            return response()->json(['success' => 'You have successfully delete blog.']);
        }
    }
}
