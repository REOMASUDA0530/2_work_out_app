<?php

use Illuminate\Database\Seeder;

class eventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
   public function run()
    {
        $param = [
            'reps' => 1,
            'sets' => 1,
            
            'post_id' => 1,
        ];
            
        DB::table('events')->insert($param);
    }
}
