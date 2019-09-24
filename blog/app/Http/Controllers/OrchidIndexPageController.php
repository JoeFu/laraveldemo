<?php

namespace orchidwine\Http\Controllers;

use Illuminate\Http\Request;

class OrchidIndexPageController extends Controller
{
    public function show($language){
        switch ($language) {
            case 'en' :
                return view('orchid.en',['index' => $language]);
            case 'cn':
                return view('orchid.cn',['index' => $language]);
            default: view('en');
        }
    }
}
