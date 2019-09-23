<?php

namespace orchidwine\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index()
    {
        $users = [
            '0' => [
                'first_name' => 'Joe',
                'last_name' => 'Fu'
            ],
            '1' => [
                'first_name' => 'admin',
                'last_name' => 'nil'
            ]
            ];
        return view('admin.users.index',compact('users'));;
    }
}
