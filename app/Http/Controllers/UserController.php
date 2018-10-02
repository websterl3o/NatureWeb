<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function configUser()
    {
        return view('user.config');
    }
}
