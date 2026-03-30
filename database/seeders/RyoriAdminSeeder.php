<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RyoriAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Evita duplicidade
        if (!DB::table('users')->where('email', 'admin@ryori.com')->exists()) {
            DB::table('users')->insert([
                'name' => 'Admin Ryori',
                'email' => 'admin@ryori.com',
                'password' => Hash::make('expoasa2026'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
