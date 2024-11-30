<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfitCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('profit_categories')->insert([
            ['id' => 1, 'name' => '厄除け', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'name' => '安全祈願', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'name' => '健康', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 4, 'name' => '仕事・商売', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 5, 'name' => '恋愛・人間関係', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 6, 'name' => '暮らし・家族', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 7, 'name' => '開運', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
