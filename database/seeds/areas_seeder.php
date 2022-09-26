<?php

use Illuminate\Database\Seeder;

class areas_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => Str::random(20),
        ];
            
        DB::table('areas')->insert($param);
    }
}
