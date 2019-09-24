<?php

namespace orchidwine\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('en');
    }
    public function index_cn()
    {
        return view ('cn');
    }


//    public function __construct()
//    {
//        $this->middleware('auth');
//    }
}
