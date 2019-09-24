<?php

namespace orchidwine\Http\Controllers;

use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function chooseSelection($selection)
    {
        switch ($selection) {
            case 'IT' :
                return view('team',['selection' => $selection]);
            case 'Jason':
                return view('team',['selection' => $selection]);
            default: view('404.index');
        }


    }
}
