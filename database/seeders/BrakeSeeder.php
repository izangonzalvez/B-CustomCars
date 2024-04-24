<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrakeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('brakes')->insert([
            [
                'name' => 'brembo kit',
                'style' => 'competition',
                'model' => 'GT',
                'price' => '4000',
            ],
            [
                'name' => 'ridex',
                'style' => 'sport',
                'model' => '280',
                'price' => '80',
            ],
            [
                'name' => 'stark',
                'style' => 'racing',
                'model' => '002',
                'price' => '150',
            ],

        ]);
    }
}
