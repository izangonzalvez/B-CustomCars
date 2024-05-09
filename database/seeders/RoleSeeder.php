<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create(['id' => Role::ADMIN, 'name' => 'admin']);
        Role::create(['id' => Role::CUSTOMER, 'name' => 'customer']);
        Role::create(['id' => Role::AUTHOR, 'name' => 'author']);
        Role::create(['id' => Role::PROVEEDOR, 'name' => 'proveedor']);
    }
}
