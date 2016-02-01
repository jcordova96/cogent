<?php

namespace App\Http\Controllers;

class SiteController extends Controller {

    public function index()
    {
        $data = [];

        return view('site/index');
    }

    public function contact()
    {
        return view('site/contact');
    }

    public function about()
    {
        return view('site/about');
    }

    public function whyChooseUs()
    {
        return view('site/why-choose-us');
    }


}
