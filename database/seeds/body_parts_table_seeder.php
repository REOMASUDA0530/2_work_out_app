<?php

use Illuminate\Database\Seeder;

class body_parts_table_seeder extends Seeder
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
            
        DB::table('body_parts')->insert($param);
    }
}
