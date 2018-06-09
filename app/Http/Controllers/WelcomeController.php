<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
    public function db()
    {
        $userinfo=DB::select("select * from users");
        return dd($userinfo);
    }
    public function dbins()
    {
        DB::insert('insert into users (id, name, email,password) values (?, ?, ? ,?)',
         [2, 'Laravel','laravel@test.com','12sdk']);
    }


}
