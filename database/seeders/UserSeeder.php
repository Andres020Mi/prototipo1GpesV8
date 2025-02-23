<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin User',
                'email' => 'admin@example.com',
                'password' => Hash::make('password123'),
                'role' => 'admin', // 🔹 Rol de administrador
                'email_verified_at' => now(),
            ],
            [
                'name' => 'Prestamista User',
                'email' => 'prestamista@example.com',
                'password' => Hash::make('password123'),
                'role' => 'prestamista', // 🔹 Rol de prestamista
                'email_verified_at' => now(),
            ],
            [
                'name' => 'Cuentadante User',
                'email' => 'cuentadante@example.com',
                'password' => Hash::make('password123'),
                'role' => 'cuentadante', // 🔹 Rol de cuentadante
                'email_verified_at' => now(),
            ],
            [
                'name' => 'Prestatario User',
                'email' => 'prestatario@example.com',
                'password' => Hash::make('password123'),
                'role' => 'prestatario', // 🔹 Rol de prestatario
                'email_verified_at' => now(),
            ],
        ]);
    }
}
