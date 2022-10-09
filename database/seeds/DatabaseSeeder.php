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
            areas_seeder::class,
            body_parts_table_seeder::class,
            posts_table_seeder::class,
            posts_table_seeder::class,
            users_table_seeder::class,
            training_events_table_seeder::class,
        ]);
    }
}
