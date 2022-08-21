<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserPageController extends Controller
{
    //get the user home page
    public function home()
    {
        return view('user.home');
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
    public function work()
    {
        return view('user.work');
    }
}
