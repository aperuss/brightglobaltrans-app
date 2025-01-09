<?php

namespace App\Http\Controllers;

class rentController extends Controller{
    public function home(){
        return view('index2');
    }
    public function rent(){
        return view('rent');
    }
    public function aboutus(){
        return view('aboutus');
    }
    public function testimoni(){
        return view('testimoni');
    }
}