<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {$adminEmail = config('admin.email');$adminData = ['name'      => config('admin.name'),'password'  => Hash::make(config('admin.password')),'role_id'   => Role::ADMIN];

        User::updateOrCreate(['email' => $adminEmail], $adminData);
    } 
}
