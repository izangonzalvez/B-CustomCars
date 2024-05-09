<?php

namespace Database\Seeders;

use App\Models\Proveedor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class SuspensionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $proveedor = Proveedor::firstOrCreate(['email' => 'andres@example.com']);
        DB::table('suspensions')->insert([
            [
                'name' => 'Oscilante',
                'price' => '40',
                'type' => 'rigida',
                'proveedor_id' => $proveedor->id,
            ],
            [
                'name' => 'McPherson',
                'price' => '50',
                'type' => 'independiente',
                'proveedor_id' => $proveedor->id,
            ],
            [
                'name' => 'Multilink',
                'price' => '55',
                'type' => 'neumatica',
                'proveedor_id' => $proveedor->id,
            ]
        ]);
    }
}
