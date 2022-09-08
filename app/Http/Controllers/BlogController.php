<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.blog');
    }

    public function fetchBlog()
    {

        $blogs = Blog::all();

        return response()->json([
            'blogs' => $blogs
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getBlog($id)
    {
        //get the blog data
        $blog = Blog::find($id);
        $blogDate = strtotime($blog->created_at);
        $blogDate = date('d M Y', $blogDate);
        $blogs = Blog::orderBy('id', 'desc')->skip(1)->take(2)->get();

        return response()->json([
            'blog' => $blog,
            'blogs' => $blogs,
            'blogDate' => $blogDate
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validation input
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
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Blog::find($id);

        return response()->json($blog);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        //validation input
        $request->validate([
            'title' => 'required',
            'text' => 'required',
            'thumbnail' => 'required|image'
        ]);

        $blog = Blog::find($request->id);

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
     * @param  \App\Models\CaseStudy  $caseStudy
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Blog $caseStudy)
    {
        $blog = Blog::find($id);

        $delete = $blog->delete();

        if ($delete) {
            return response()->json(['success' => 'You have successfully delete blog.']);
        }
    }
}
