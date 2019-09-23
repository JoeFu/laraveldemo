<?php


namespace orchidwine\Http\Controllers;


class testController
{
    public function show($test)
    {
        $array  = [
        'first' => 'This is the first post',
        'second' => 'This is the second post'
        ];

        if (! array_key_exists($test,$array))
        {
        abort(404,'Sorry the page were not found!');
        }
        return view('test',[
        'show' => $array[$test] ?? "NO POST"
        ]);
    }

}