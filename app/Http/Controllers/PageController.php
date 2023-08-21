<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about(){
        return view('pages.about');
    }

    public function glosary(){
        return view('pages.glosary');
    }

    public function whyChooseUs(){
        return view('pages.why-choose-us');
    }

    public function faq(){
        return view('pages.faq');
    }

    public function accreditation(){
        return view('pages.accreditation');
    }
}
