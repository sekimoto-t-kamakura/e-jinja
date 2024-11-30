<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FestivalCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('festival_categories')->insert([
            ['id' => 1, 'name' => '大祭', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'name' => '中祭', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'name' => '小祭', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
