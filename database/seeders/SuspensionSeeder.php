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
        DB::table('suspensions')->insert([
            [
                'name' => 'Oscilante',
                'price' => '40',
                'type' => 'rigida',
                'user_id' => 1,
            ],
            [
                'name' => 'McPherson',
                'price' => '50',
                'type' => 'independiente',
                'user_id' => 1,
            ],
            [
                'name' => 'Multilink',
                'price' => '55',
                'type' => 'neumatica',
                'user_id' => 1,
            ]
        ]);
    }
}
