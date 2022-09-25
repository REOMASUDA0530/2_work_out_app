<?php

use Illuminate\Database\Seeder;

class training_events_table_seeder extends Seeder
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
            
        DB::table('training_events')->insert($param);
    }
}
