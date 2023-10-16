<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Task::create([
            'name' => 'ahmed',
            'email' => 'ahmed@ahmed.ahmed',
            'password' => 'ahmed123',
            'is_active' => true,
            'last_name' => 'sayed',
            'img' => 'ahmed.jpg',
            'words' => 'ahmed',
            'sentence' => 'ahmed ahmed ahmed',
            'paragraph' => 'ahmed',
            'human_w' => 'ahmed',
            'non_human_word' => 'ahasdaasdadasdmed',
            'nums' => 10,
            'this_year' => '2023-10-10',
            'this_Month' => '2023-10-10',
            'emoji' => ';)',
        ]);
    }
}
