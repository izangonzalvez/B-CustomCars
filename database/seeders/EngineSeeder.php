<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EngineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('engines')->insert([
            [
                'name' => 'Turbocharged Boxer-4',
                'power' => '310',
                'revolutions' => '6000',
                'price' => '4000',
                'fuel' => 'gasoline',
            ],
            [
                'name' => 'Twin-Turbo Inline-6',
                'power' => '473',
                'revolutions' => '7000',
                'price' => '4000',
                'fuel' => 'gasoline',
            ],
            [
                'name' => 'V ocho',
                'power' => '460',
                'revolutions' => '7500',
                'price' => '4000',
                'fuel' => 'gasoline',
            ],
            [
                'name' => 'V ocho',
                'power' => '455',
                'revolutions' => '6000',
                'price' => '4000',
                'fuel' => 'gasoline',
            ],
        ]);
    }
}