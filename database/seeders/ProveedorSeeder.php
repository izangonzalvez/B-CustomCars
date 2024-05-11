<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


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
                'name' => 'Parson',
                'email' => 'izan@example.com',
                'password' => Hash::make('12345678'),
            ],
            [
                'name' => 'Racing',
                'email' => 'andres@example.com',
                'password' => Hash::make('87654321'),
            ],
        ]);

    }
}
