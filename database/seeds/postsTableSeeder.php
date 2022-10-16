<?php

use Illuminate\Database\Seeder;

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
            
            'user_id' => 1,
        ];
            
        DB::table('posts')->insert($param);
    }
}
