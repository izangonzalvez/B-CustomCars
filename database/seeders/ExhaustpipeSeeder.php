<?php

namespace Database\Seeders;

use App\Models\Proveedor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExhaustpipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('exhaustpipes')->insert([
            [
                'type' => 'donwpipe',
                'price' => '450',
                'size' => '1.50',
                'user_id' => 1,
            ],
            [
                'type' => 'intermedio',
                'price' => '120',
                'size' => '1.50',
                'user_id' => 1,
            ],
            [
                'type' => 'final con colas',
                'price' => '500',
                'size' => '1.20',
                'user_id' => 1,
            ],
            [
                'type' => 'mariposas',
                'price' => '250',
                'size' => '0.50',
                'user_id' => 1,
            ],
            [
                'type' => 'todo',
                'price' => '1900',
                'size' => '4.00',
                'user_id' => 1,
            ],
        ]);
    }
}
