<?php

namespace Database\Seeders;

use App\Models\Proveedor;
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

        $proveedor = Proveedor::firstOrCreate(['email' => 'andres@example.com']);
        DB::table('brakes')->insert([
            [
                'name' => 'brembo kit',
                'style' => 'competition',
                'model' => 'GT',
                'price' => '4000',
                'proveedor_id' => $proveedor->id,
            ],
            [
                'name' => 'ridex',
                'style' => 'sport',
                'model' => '280',
                'price' => '80',
                'proveedor_id' => $proveedor->id,
            ],
            [
                'name' => 'stark',
                'style' => 'racing',
                'model' => '002',
                'price' => '150',
                'proveedor_id' => $proveedor->id,
            ],

        ]);
    }
}
