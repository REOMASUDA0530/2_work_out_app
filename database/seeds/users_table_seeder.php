<?php

use Illuminate\Database\Seeder;

class users_table_seeder extends Seeder
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
            'email' => Str::random(5).'@gmail.com',
            'password' => Str::random(10),
        ];
            
        DB::table('users')->insert($param);
    }
}
