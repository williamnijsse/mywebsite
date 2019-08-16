<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function aboutMe()
    {
        return view('aboutMe');
    }

    public function projects()
    {
        return view('projects');
    }

    public function contact()
    {
        return view('contact');
    }
}
