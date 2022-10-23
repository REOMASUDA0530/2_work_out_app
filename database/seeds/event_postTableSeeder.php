<?php

use Illuminate\Database\Seeder;

class event_postTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'event_id' => 1,
            'post_id' => 1,
            
        ];
            
        DB::table('event_post')->insert($param);
    }
}
