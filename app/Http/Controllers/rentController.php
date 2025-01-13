<?php

namespace App\Http\Controllers;

class rentController extends Controller{
    public function home(){
        return view('index(rev)');
    }
    public function rent(){
        return view('rent(rev)');
    }
    public function aboutus(){
        return view('aboutus');
    }
    public function testimoni(){
        return view('testimoni(rev)');
    }
    public function information(){
        return view('main-information');
    }
}