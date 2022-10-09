<?php

use Illuminate\Database\Seeder;

class posts_table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'title' => Str::random(20),
            'body' => Str::random(13000),
            
            'user_id' => random_int(1,10),
            'training_event_id' => random_int(1, 10),
        ];
            
        DB::table('posts')->insert($param);
    }
}
