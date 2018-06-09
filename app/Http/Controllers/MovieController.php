<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class MovieController extends Controller
{
    public function index()
    {
        $movies=DB::select("select * from movies");
        return view('movies.index')->with('movies',$movies);
    }
    public function create()
    {
        return view('movies.form');
    }
    public function store()
    {
        $movie_title=Input::get('movie_title');
        $movie_budget=Input::get('movie_budget');
        $movie_date=Input::get('movie_date');
        DB::insert('insert into movies (movie_title, movie_date, movie_budget) values (?, ?, ?)',[$movie_title,$movie_date,$movie_budget]);
        return redirect('movies');

    }
}
