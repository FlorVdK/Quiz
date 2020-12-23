<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0;$i<6; $i++){
            for($j=0;$j<5; $j++){
                for($k=0;$k<4; $k++){
                    if($k == 0){
                        DB::table('answers')->insert([
                            'answer' => 'question '.$i.$j.$k,
                            'is_correct' => true,
                            'question_id' => $j + ($i * 5) + 1,
                        ]);
                    }else{
                        DB::table('answers')->insert([
                            'answer' => 'question '.$i.$j.$k,
                            'is_correct' => false,
                            'question_id' => $j + ($i * 5) + 1,
                        ]);
                    }
                }
            }
        }
    }
}
