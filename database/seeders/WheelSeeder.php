<?php

namespace Database\Seeders;

use App\Models\Proveedor;
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
                'user_id' => 1,
            ],
            [
                'name' => 'ronal',
                'type' => 'aluminio',
                'inch' => '18',
                'price' => '150',
                'user_id' => 1,
            ],
            [
                'name' => 'japan racing',
                'type' => 'aluminio',
                'inch' => '19',
                'price' => '200',
                'user_id' => 1,
            ]
        ]);
    }
}
