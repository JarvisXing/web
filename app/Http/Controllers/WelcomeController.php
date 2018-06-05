<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function about(){
        return view('welcome.about');
    }
    public function photo(){
        return view('welcome.photo');
    }
    public function news(){
        return view('welcome.news');
    }

}
