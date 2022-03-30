<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class direccionesController extends Controller
{
    public function inicio(){
        return view('index');
    }

    public function about(){
        return view('about');
    }

    public function contact(){
        return view('contact');
    }

    public function piratas(){
        return view('piratas');
    }

    public function pirata(){
        return view('pirata');
    }
}
