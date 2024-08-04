<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'ADMINISTRADOR',
            'email' => 'admin@admin.com',
            'username' => 'ADMINISTRADOR',
            'password' => Hash::make('12345678'),
            'role' => 'admin',
        ]);
    }
}
