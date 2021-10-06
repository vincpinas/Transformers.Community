<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'title' => Str::random(10),
            'time' => Date(),
            'text' => Str::random(55),
            'author' => Str::random(7)
        ]);
    }
}
