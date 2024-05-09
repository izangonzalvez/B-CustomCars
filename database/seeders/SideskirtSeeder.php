<?php

namespace Database\Seeders;

use App\Models\Proveedor;
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
        $proveedor = Proveedor::firstOrCreate(['email' => 'andres@example.com']);
        DB::table('sideskirts')->insert([
            [
                'size' => '90',
                'material' => 'carbono',
                'price' => '50',
                'proveedor_id' => $proveedor->id,
            ],
            [
                'size' => '75',
                'material' => 'carbono',
                'price' => '60',
                'proveedor_id' => $proveedor->id,
            ],
            [
                'size' => '85',
                'material' => 'carbono',
                'price' => '89',
                'proveedor_id' => $proveedor->id,
            ]
        ]);
    }
}
