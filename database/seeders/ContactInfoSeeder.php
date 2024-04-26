<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('contact_infos')->insert([
            [
                "address" => "ins joaquim mir",
                "phone" => "123456789",
                "email" => "prueba@prueba.com",
                "message" => "Problema con los seeders",
            ],
            [
                "address" => "can puig",
                "phone" => "987654321",
                "email" => "prueba1@prueba.com",
                "message" => "Problema con los seeders persistente",
            ],
        ]);
    }
}
