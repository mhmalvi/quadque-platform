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

        $caseStudyFirstRows = CaseStudy::orderBy('id', 'asc')->skip(0)->take(4)->get();
        $caseStudySecondRows = CaseStudy::orderBy('id', 'asc')->skip(3)->take(4)->get();

        $firstBlog = Blog::orderBy('id', 'desc')->skip(0)->take(1)->first();
        $firstBlogId = $firstBlog->id;
        $firstBlogThumbnail = $firstBlog->thumbnail;
        $firstBlogTitle = Str::of($firstBlog->title)->limit(90, '...');
        $firstBlogTitleMobile = Str::of($firstBlog->title)->limit(60, '...');
        $firstBlogDate = strtotime($firstBlog->created_at);
        $firstBlogDate =  date('d  M  Y', $firstBlogDate);

        $secondBlog = Blog::orderBy('id', 'desc')->skip(1)->take(1)->first();
        $secondBlogId = $secondBlog->id;
        $secondBlogThumbnail = $secondBlog->thumbnail;
        $secondBlogTitle = Str::of($secondBlog->title)->limit(90, '...');
        $secondBlogTitleMobile = Str::of($secondBlog->title)->limit(60, '...');
        $secondBlogDate = strtotime($secondBlog->created_at);
        $secondBlogDate =  date('d  M  Y', $secondBlogDate);

        $thirdBlog = Blog::orderBy('id', 'desc')->skip(2)->take(1)->first();
        $thirdBlogId = $thirdBlog->id;
        $thirdBlogThumbnail = $thirdBlog->thumbnail;
        $thirdBlogTitle = Str::of($thirdBlog->title)->limit(90, '...');
        $thirdBlogTitleMobile = Str::of($thirdBlog->title)->limit(40, '...');
        $thirdBlogDate = strtotime($thirdBlog->created_at);
        $thirdBlogDate =  date('d  M  Y', $thirdBlogDate);

        $fourthBlog = Blog::orderBy('id', 'desc')->skip(3)->take(1)->first();
        $fourthBlogId = $fourthBlog->id;
        $fourthBlogThumbnail = $fourthBlog->thumbnail;
        $fourthBlogTitle = Str::of($fourthBlog->title)->limit(90, '...');





        $blogs = [
            'firstBlogId' => $firstBlogId,
            'firstBlogTitle' => $firstBlogTitle,
            'firstBlogTitleMobile' => $firstBlogTitleMobile,
            'firstBlogThumbnail' => $firstBlogThumbnail,
            'firstBlogDate' => $firstBlogDate,
            'secondBlogId' => $secondBlogId,
            'secondBlogTitle' => $secondBlogTitle,
            'secondBlogTitleMobile' => $secondBlogTitleMobile,
            'secondBlogThumbnail' => $secondBlogThumbnail,
            'secondBlogDate' => $secondBlogDate,
            'thirdBlogId' => $thirdBlogId,
            'thirdBlogTitle' => $thirdBlogTitle,
            'thirdBlogTitleMobile' => $thirdBlogTitleMobile,
            'thirdBlogThumbnail' => $thirdBlogThumbnail,
            'thirdBlogDate' => $thirdBlogDate,
            'fourthBlogId' => $fourthBlogId,
            'fourthBlogTitle' => $fourthBlogTitle,
            'fourthBlogThumbnail' => $fourthBlogThumbnail,
        ];

        echo '<script>
                    let screenWidth = screen.width;
                    document.cookie = "screenWidth="+screenWidth;
              </script>';

        if (isset($_COOKIE['screenWidth'])) {

            $screenWidth = $_COOKIE['screenWidth'];

            if ($screenWidth > 428) {

                return view('user.components.desktop', compact('caseStudyFirstRows', 'caseStudySecondRows', 'blogs'));
            } else {

                return view('user.components.mobile', compact('caseStudyFirstRows', 'caseStudySecondRows', 'blogs'));
            }
        } else {

            echo '<script>
                   window.location.reload(); 
              </script>';
        }
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
