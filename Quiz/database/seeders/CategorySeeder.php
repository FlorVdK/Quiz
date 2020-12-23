<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'category_name' => 'Flor',
            'quizzes_id' => 1,
        ]);
        DB::table('categories')->insert([
            'category_name' => 'Kerstfilms',
            'quizzes_id' => 1,
        ]);
        DB::table('categories')->insert([
            'category_name' => 'Sport 2020',
            'quizzes_id' => 1,
        ]);
        DB::table('categories')->insert([
            'category_name' => 'Grootte',
            'quizzes_id' => 1,
        ]);
        DB::table('categories')->insert([
            'category_name' => 'Tv-series',
            'quizzes_id' => 1,
        ]);
        DB::table('categories')->insert([
            'category_name' => 'Geschiedenis',
            'quizzes_id' => 1,
        ]);
    }
}
