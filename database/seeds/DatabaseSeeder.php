<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            usersTableSeeder::class,
            typesTableSeeder::class,
            eventsTableSeeder::class,
            postsTableSeeder::class,
            event_postTableSeeder::class,
            
        ]);
    }
}
