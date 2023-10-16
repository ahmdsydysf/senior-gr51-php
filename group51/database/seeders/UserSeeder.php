<?php

namespace Database\Seeders;

use App\Models\Task;
use App\Models\User;
use App\Models\Project;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // DB::table('users')->insert([
        //     'name' => 'admin',
        //     'email' => 'admin@website.com',
        //     'password' => 'Admin123'
        // ]);

        User::factory(10)->create()
            ->each(function ($user) {
                Project::factory(5)->create(['user_id' => User::inRandomOrder()->first()->id ])
                    ->each(function ($proj) {
                        Task::factory(7)->create(['project_id' => $proj->id]);
                    });
            });

    }
}
