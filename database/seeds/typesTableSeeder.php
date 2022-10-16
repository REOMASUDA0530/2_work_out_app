<?php

use Illuminate\Database\Seeder;

class typesTableSeeder extends Seeder
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
            'event_id' => 1
        ];
            
        DB::table('types')->insert($param);
    }
}
