<?php

namespace orchidwine\Http\Controllers;

use Illuminate\Http\Request;

class OrchidProductsPageController extends Controller
{
    public function show($index){

        $array  = [
            '1' => 'Arden',
            '2' => 'Option'
        ];

        if (! array_key_exists($index,$array))
        {
            abort(404,'Sorry the page were not found!');
        }
        return view('orchid.products',[
            'show' => $array[$index] ?? "NO Data"
        ]);
    }
}
