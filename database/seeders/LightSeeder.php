<?php

namespace Database\Seeders;

use App\Models\Proveedor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $proveedor = Proveedor::firstOrCreate(['email' => 'andres@example.com']);
        DB::table('lights')->insert([
            [
                'name' => 'Bombillas halógenas', 
                'type' => 'Halógenas',
                'price' => '20',
                'color' => 'Blanco cálido',
                'proveedor_id' => $proveedor->id,
            ],
            [
                'name' => 'Luces LED', 
                'type' => 'LED',
                'price' => '60',
                'color' => 'Blanco Brillante',
                'proveedor_id' => $proveedor->id,
            ],
            [
                'name' => 'Luces de senón', 
                'type' => 'Xenón',
                'price' => '100',
                'color' => 'Blanco azulado',
                'proveedor_id' => $proveedor->id,
            ],
            [
                'name' => 'Luces de neón', 
                'type' => 'Neón',
                'price' => '80',
                'color' => 'Varios colores disponibles, como azul, rojo, verde, etc',
                'proveedor_id' => $proveedor->id,
            ],
        ]);
    }
}
