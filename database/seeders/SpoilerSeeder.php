<?php

namespace Database\Seeders;

use App\Models\Proveedor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class SpoilerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('spoilers')->insert([
            [
                'type' => 'ducktail',
                'price' => '40',
                'size' => '50',
                'material' => 'carbono',
                'user_id' => 1,
            ],
            [
                'type' => 'labio',
                'price' => '40',
                'size' => '40',
                'material' => 'carbono',
                'user_id' => 1,
            ],
            [
                'type' => 'ala',
                'price' => '60',
                'size' => '55',
                'material' => 'carbono',
                'user_id' => 1,
            ]
        ]);
    }
}
