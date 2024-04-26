<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChatAssistanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('ChatAssistances')->insert([
            [
                'name' => 'Problema',
                'message' => 'Tengo un problema con Youtube',
                'response' => 'Reinstalalo',
                'user_id' => 1,
            ],
            [
                'name' => 'Crasheo',
                'message' => 'Crasheo mi PC',
                'response' => 'Reinicialo',
                'user_id' => 1,
            ],
            [
                'name' => 'Audio',
                'message' => 'El audio me va mal',
                'response' => 'instala controladores',
                'user_id' => 1,
            ],
        ]);
    }
}
