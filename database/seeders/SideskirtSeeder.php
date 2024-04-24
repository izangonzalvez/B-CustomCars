<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class SideskirtSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('sideskirts')->insert([
            [
                'size' => '90',
                'material' => 'carbono',
                'price' => '50',
            ],
            [
                'size' => '75',
                'material' => 'carbono',
                'price' => '60',
            ],
            [
                'size' => '85',
                'material' => 'carbono',
                'price' => '89',
            ]
        ]);
    }
}
