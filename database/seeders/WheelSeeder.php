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
        $proveedor = Proveedor::firstOrCreate(['email' => 'andres@example.com']);
        DB::table('wheels')->insert([
            [
                'name' => 'oz',
                'type' => 'aluminio',
                'inch' => '19',
                'price' => '180',
                'proveedor_id' => $proveedor->id,
            ],
            [
                'name' => 'ronal',
                'type' => 'aluminio',
                'inch' => '18',
                'price' => '150',
                'proveedor_id' => $proveedor->id,
            ],
            [
                'name' => 'japan racing',
                'type' => 'aluminio',
                'inch' => '19',
                'price' => '200',
                'proveedor_id' => $proveedor->id,
            ]
        ]);
    }
}
