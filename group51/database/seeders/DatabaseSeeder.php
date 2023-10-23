<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Product;
use App\Models\Profile;
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
        $this->call(UserSeeder::class);
        //$this->call(CategorySeeder::class);
        //$this->call(TaskSeeder::class);
        // Category::factory(10)->create()->each(function ($cat) {
        //     Category::factory(2)->create([
        //         'parent_category_id' => $cat->id
        //     ]);
        // });
        Category::factory(10)->create();
        Category::factory(10)->create();


        Product::factory(100)->create();
        // User::factory(50)->create()->each(function ($user) {
        //     Profile::factory(1)->create(['user_id' => $user->id]);
        // });
        // Profile::factory(10)->create();
        // Task::factory(13)->create();


    }
}
