<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WheelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('wheels')->insert([
            [
                'name' => 'oz',
                'type' => 'aluminio',
                'inch' => '19',
                'price' => '180',
            ],
            [
                'name' => 'ronal',
                'type' => 'aluminio',
                'inch' => '18',
                'price' => '150',
            ],
            [
                'name' => 'japan racing',
                'type' => 'aluminio',
                'inch' => '19',
                'price' => '200',
            ]
        ]);
    }
}
