<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index ()
    {
//        if (Auth::user()->getAuthIdentifierName() === 'Admin' && ) TODO add this function
        return redirect()->route('for-redirect');
    }

    public function home ()
    {
        return view('landing');
    }

    public function aboutUS ()
    {
        return view('aboutUs');
    }

    public function offers ()
    {
        return view('offers');
    }

    public function contact ()
    {
        return view('contact');
    }

    public function singleListing ()
    {
        return view('singleListing');
    }
    public function adminPanel ()
    {
        return view('singleListing');
    }
    public function blog ()
    {
        return view('blog');
    }
}
