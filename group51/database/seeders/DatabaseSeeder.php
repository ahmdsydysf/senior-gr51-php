<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Task;
use App\Models\User;
use App\Models\Project;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //$this->call(UserSeeder::class);
        //$this->call(CategorySeeder::class);
        //$this->call(TaskSeeder::class);

        User::factory(50)->create();
        Project::factory(10)->create();
        Task::factory(13)->create();


    }
}
