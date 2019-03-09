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
        $this->call(ClientTypesTableSeeder::class);
        $this->call(TaskPriorityTypesTableSeeder::class);
        $this->call(TaskStatusTypesTableSeeder::class);
        $this->call(TaskTypesTableSeeder::class);

    }
}
