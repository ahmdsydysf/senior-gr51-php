<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $data = [
            ['name' => 'Cairo' , 'phone' => 6969],
            ['name' => 'Giza' , 'phone' => 76],
            ['name' => 'Oboor' , 'phone' => 6945669],
            ['name' => 'Nasr City' , 'phone' => 67878969],
        ];

        foreach($data as $branchData) {
            DB::table('branches')->insert([
                'branch_name' => $branchData['name'],
                'branch_phone' => $branchData['phone']
            ]);
        }

    }
}
