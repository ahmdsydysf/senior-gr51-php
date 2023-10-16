<?php

namespace Database\Seeders;

use Carbon\Carbon;
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
            ['name' => 'Cairo' , 'code' => 6969 , 'description' => 'ay descript1'],
            ['name' => 'Giza' , 'code' => 76 , 'description' => 'ay descript2'],
            ['name' => 'Oboor' , 'code' => 6945669 , 'description' => 'ay descript3'],
            ['name' => 'Nasr City' , 'code' => 67878969 , 'description' => 'ay descript4'],
        ];

        foreach($data as $branchData) {
            DB::table('categories')->insert([
                'name' => $branchData['name'],
                'code' => $branchData['code'],
                'description' => $branchData['description'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }

    }
}
