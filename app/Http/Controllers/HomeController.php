<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function menuPage()
    {
        return view('menu');
    }
    public function aboutPage()
    {
        return view('about');
    }
    public function contactPage()
    {
        return view('contact');
    }
    public function orderPage()
    {
        return view('order');
    }
}

