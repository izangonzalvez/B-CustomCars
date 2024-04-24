<?php

namespace Database\Seeders;

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
        DB::table('lights')->insert([
            [
                'name' => 'Bombillas halógenas', 
                'type' => 'Halógenas',
                'price' => '20',
                'color' => 'Blanco cálido',
            ],
            [
                'name' => 'Luces LED', 
                'type' => 'LED',
                'price' => '60',
                'color' => 'Blanco Brillante',
            ],
            [
                'name' => 'Luces de senón', 
                'type' => 'Xenón',
                'price' => '100',
                'color' => 'Blanco azulado',
            ],
            [
                'name' => 'Luces de neón', 
                'type' => 'Neón',
                'price' => '80',
                'color' => 'Varios colores disponibles, como azul, rojo, verde, etc',
            ],
        ]);
    }
}
