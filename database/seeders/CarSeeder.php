<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        

        DB::table('cars')->insert([
            [
                'name' => 'Proyecto daily',
                'color' => 'Negro',
                'horn' => 'Sonido grabe',
                'user_id' => 1,
                'wheel_id' => 1, 
                'engine_id' => 1, 
                'suspension_id' => 1, 
                'brake_id' => 1,
                'exhaustpipe_id' => 1, 
                'light_id' => 1, 
                'spoiler_id' => 1,
                'sideskirt_id' => 1, 
            ],
            
        ]);
    }
}
