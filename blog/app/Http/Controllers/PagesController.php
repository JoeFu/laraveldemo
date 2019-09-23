<?php

namespace orchidwine\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class PagesController extends Controller
{
    //
    public function index()
    {
        if(View::exists('pages.index'))
            return view('pages.index',['title'=>'<h1>Title</h1>','content'=>'This is content']);
        else
            return view('404.index');
    }

}
