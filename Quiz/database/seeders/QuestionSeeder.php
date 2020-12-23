<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i<6; $i++){
            for($j = 0; $j<5; $j++){
                DB::table('questions')->insert([
                    'question' => 'question '.$j.$i,
                    'question_weight' => $j + 1,
                    'is_answered' => false,
                    'caregory_id' => $i + 1,
                ]);
            }
        }
    }
}
