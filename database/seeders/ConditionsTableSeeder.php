<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConditionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('conditions')->insert([
            ['id' => 1, 'name' => '歴史のある神社', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'name' => 'かわいい御朱印がある神社', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'name' => '格好良い御朱印がある神社', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 4, 'name' => '鳥居が格好良い神社', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 5, 'name' => '恋愛成就にゆかりのある神社', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 6, 'name' => '勝負運にゆかりのある神社', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 7, 'name' => '健康・長寿にゆかりのある神社', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
