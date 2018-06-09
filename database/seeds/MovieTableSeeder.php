<?php

use Illuminate\Database\Seeder;

class MovieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=array(
            array('movie_title'=>'阿甘正传','movie_budget'=>120,'movie_date'=>'1994-06-23'),
            array('movie_title'=>'雪国列车','movie_budget'=>237,'movie_date'=>'1998-06-23'),

        );
        DB::table('movies')->insert($data);
    }
}
