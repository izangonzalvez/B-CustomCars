<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Exhaustpipe;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([
            WheelSeeder::class,
            SuspensionSeeder::class,
            SpoilerSeeder::class,
            SideskirtSeeder::class,
            BrakeSeeder::class,
            EngineSeeder::class,
            ExhaustpipeSeeder::class,
            LightSeeder::class,
        ]);
    }
}
