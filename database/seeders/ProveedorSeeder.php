<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProveedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Define los proveedores que deseas crear
        DB::table('proveedors')->insert([
            [
                'email' => 'izan@example.com',
            ],
            [
                'email' => 'andres@example.com',
            ],
        ]);

    }
}
