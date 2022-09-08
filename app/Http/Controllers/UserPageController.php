<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\CaseStudy;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class UserPageController extends Controller
{
    //get the user home page
    public function home()
    {
        $caseStudyFirstRows = CaseStudy::orderBy('id', 'asc')->skip(0)->take(3)->get();
        $caseStudySecondRows = CaseStudy::orderBy('id', 'asc')->skip(3)->take(3)->get();

        $firstBlog = Blog::orderBy('id', 'desc')->skip(0)->take(1)->first();
        $firstBlogId = $firstBlog->id;
        $firstBlogTitle = Str::of($firstBlog->title)->limit(90, '...');
        $firstBlogDate = strtotime($firstBlog->created_at);
        $firstBlogDate =  date('d  M  Y', $firstBlogDate);

        $secondBlog = Blog::orderBy('id', 'desc')->skip(1)->take(1)->first();
        $secondBlogId = $secondBlog->id;
        $secondBlogTitle = Str::of($secondBlog->title)->limit(90, '...');

        $thirdBlog = Blog::orderBy('id', 'desc')->skip(2)->take(1)->first();
        $thirdBlogId = $thirdBlog->id;
        $thirdBlogTitle = Str::of($thirdBlog->title)->limit(90, '...');

        $fourthBlog = Blog::orderBy('id', 'desc')->skip(3)->take(1)->first();
        $fourthBlogId = $fourthBlog->id;
        $fourthBlogTitle = Str::of($fourthBlog->title)->limit(90, '...');

        $blogs = [
            'firstBlogId' => $firstBlogId,
            'firstBlogTitle' => $firstBlogTitle,
            'firstBlogDate' => $firstBlogDate,
            'secondBlogId' => $secondBlogId,
            'secondBlogTitle' => $secondBlogTitle,
            'thirdBlogId' => $thirdBlogId,
            'thirdBlogTitle' => $thirdBlogTitle,
            'fourthBlogId' => $fourthBlogId,
            'fourthBlogTitle' => $fourthBlogTitle
        ];

        $blogs = json_encode($blogs);






        return view('user.home', compact('caseStudyFirstRows', 'caseStudySecondRows', 'blogs'));
    }

    //get the start project page
    public function startProject()
    {
        return view('user.start-project');
    }

    //get the start project page
    public function customers()
    {
        return view('user.customers');
    }
    //get the case study page
    public function caseStudy()
    {
        return view('user.caseStudy');
    }
    //get the case study page
    public function blog()
    {
        return view('user.blog');
    }
    //get the about page
    public function aboutUs()
    {
        return view('user.aboutUs');
    }
    //get the testimonial page
    public function testimonials()
    {
        return view('user.testimonials');
    }
    //get the media buuying page
    public function mediaBuying()
    {
        return view('user.mediaBuying');
    }
    //get the testimonial page
    public function category()
    {
        return view('user.category');
    }
}
