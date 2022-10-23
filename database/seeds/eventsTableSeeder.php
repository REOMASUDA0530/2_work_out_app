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
            'name' => Str::random(5),
            
        ];
            
        DB::table('events')->insert($param);
    }
}
