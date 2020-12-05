<?php

use Illuminate\Database\Seeder;

class GenreMovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genre_movie')->insert([
            ['genre_id'=>1,'movie_id'=>1],
            ['genre_id'=>1,'movie_id'=>2],
            ['genre_id'=>1,'movie_id'=>3],
            ['genre_id'=>1,'movie_id'=>4],
            ['genre_id'=>2,'movie_id'=>5],
            ['genre_id'=>2,'movie_id'=>6],
            ['genre_id'=>2,'movie_id'=>7],
            ['genre_id'=>2,'movie_id'=>8],
            ['genre_id'=>3,'movie_id'=>9],
            ['genre_id'=>3,'movie_id'=>10],
            ['genre_id'=>3,'movie_id'=>11],
            ['genre_id'=>3,'movie_id'=>12],
        ]);
    }
}
