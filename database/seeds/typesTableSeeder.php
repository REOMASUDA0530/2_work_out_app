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
        //胸
        $param = [
            'name' => 'Bench press',
        
        ];
            
        DB::table('types')->insert($param);
        
        $param = [
            'name' => 'Dumbbell fly',
        
        ];
            
        DB::table('types')->insert($param);
        
        $param = [
            'name' => 'Chest press',
        
        ];
            
        DB::table('types')->insert($param);
        
        $param = [
            'name' => 'Cable crossover',
        
        ];
            
        DB::table('types')->insert($param);
        
        $param = [
            'name' => 'Push up',
        
        ];
            
        DB::table('types')->insert($param);
        
        
        
        //腕
        
        $param = [
            'name' => 'Arm curl',
        
        ];
            
        DB::table('types')->insert($param);
        
        //背中
        
        $param = [
            'name' => 'Chinning',
        
        ];
            
        DB::table('types')->insert($param);
        
        
        $param = [
            'name' => 'Lat pull down',
        
        ];
            
        DB::table('types')->insert($param);
        
        
        
        //脚
        
        $param = [
            'name' => 'Squat',
        
        ];
            
        DB::table('types')->insert($param);
        
        $param = [
            'name' => 'Deadlift',
        
        ];
            
        DB::table('types')->insert($param);
        
        $param = [
            'name' => 'Leg curl',
        
        ];
            
        DB::table('types')->insert($param);
        
        $param = [
            'name' => 'Leg press',
        
        ];
            
        DB::table('types')->insert($param);
        
        $param = [
            'name' => 'Leg extention',
        
        ];
            
        DB::table('types')->insert($param);
        
        
    }
}
