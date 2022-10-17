<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class postsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'title' => Str::random(10),
            'body' => Str::random(50),
            'created_at' => Carbon::now(),
            
            'user_id' => 1,
            
        ];
            
        DB::table('posts')->insert($param);
    }
}
