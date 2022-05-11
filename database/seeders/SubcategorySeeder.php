<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subcategories = [
            ['name' => 'table lamps', 'category_id' => 1],
            ['name' => 'wall lights', 'category_id' => 1],
            ['name' => 'ceiling lights', 'category_id' => 1],
            ['name' => 'clocks', 'category_id' => 2],
            ['name' => 'vases', 'category_id' => 2],
            ['name' => 'coat racks', 'category_id' => 2],
            ['name' => 'tables', 'category_id' => 3],
            ['name' => 'chairs', 'category_id' => 3],
            ['name' => 'rugs and carpets', 'category_id' => 4],
        ];

        foreach ($subcategories as $subcategory) {
            DB::table('subcategories')->insert([
                'name' => $subcategory['name'],
                'category_id' => $subcategory['category_id'],
                'created_at' => now(),
            ]);
        }
    }
}
