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
            'name' => 'Bench press',
        
        ];
            
        DB::table('types')->insert($param);
        
        $param = [
            'name' => 'Squat',
        
        ];
            
        DB::table('types')->insert($param);
        
        $param = [
            'name' => 'Deadlift',
        
        ];
            
        DB::table('types')->insert($param);
        
        $param = [
            'name' => 'Dumbbell fly',
        
        ];
            
        DB::table('types')->insert($param);
        
        $param = [
            'name' => 'Arm curl',
        
        ];
            
        DB::table('types')->insert($param);
        
        $param = [
            'name' => 'Push up',
        
        ];
            
        DB::table('types')->insert($param);
        
    }
}
