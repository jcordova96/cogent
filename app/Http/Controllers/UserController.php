<?php

namespace App\Http\Controllers;

class UserController extends Controller {

    public function index()
    {
        $data = [];

        return view('user/dashboard');
    }

    public function dashboard()
    {
        return view('user/dashboard');
    }


}
