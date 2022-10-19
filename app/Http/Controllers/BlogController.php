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

        $moreblogs = '';
        foreach ($blogs as $blog) {
            $moreblogs .= '<div class="other-blog-section">
                                <div class="other-blog-content d-flex justify-content-between">
                                    <div class="other-blog-text">
                                        <p class="other-blog-date">
                                            <span style="margin-right: 15px">weekly update </span><span>' . date("d-m-Y", strtotime($blog->created_at)) . '</span>
                                        </p>
                                        <p class="other-blog-title" onclick="showBlog(' . $blog->id . ')">
                                            ' . substr($blog->title, 100) . '
                                        </p>
                                        <p class="other-blog-details">
                                            ' . substr($blog->title, 150) . '

                                        </p>
                                    </div>
                                    <div class="other-blog-image">
                                        <img class="cancel-menu" src="' . asset('/assets/img/blogs/' . $blog->thumbnail) . '" />
                                    </div>
                                </div>
                             </div>';
        }
        return response()->json([
            'blogs' => $moreblogs
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getBlog(Request $request, $id)
    {
        //get the blog data
        $blog = Blog::find($id);
        $blogDate = strtotime($blog->created_at);
        $blogDate = date('d M Y', $blogDate);
        $blogs = Blog::orderBy('id', 'desc')->skip(1)->take(2)->get();

        $moreblogs = '';
        foreach ($blogs as $blog) {
            $moreblogs .= '<div class="other-blog-section">
                                <div class="other-blog-content d-flex justify-content-between">
                                    <div class="other-blog-text">
                                        <p class="other-blog-date">
                                            <span style="margin-right: 15px">weekly update </span><span>' . date("d-m-Y", strtotime($blog->created_at)) . '</span>
                                        </p>
                                        <p class="other-blog-title" onclick="showBlog(' . $blog->id . ')">
                                            ' . substr($blog->title, 100) . '
                                        </p>
                                        <p class="other-blog-details">
                                            ' . substr($blog->title, 150) . '

                                        </p>
                                    </div>
                                    <div class="other-blog-image">
                                        <img class="cancel-menu" src="' . asset('/assets/img/blogs/' . $blog->thumbnail) . '" />
                                    </div>
                                </div>
                             </div>';
        }



        if ($request->ajax()) {

            return response()->json([
                'blog' => $blog,
                'moreblogs' => $moreblogs,
                'blogDate' => $blogDate
            ]);
        }
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
