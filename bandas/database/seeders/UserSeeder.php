<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Admin
        User::create([
            'type' => 'admin',
            'username' => 'admin1',
            'email' => 'administrador@email.com',
            'password' => Hash::make('admin123'),
        ]);

        // User normal
        User::create([
            'type' => 'user',
            'username' => 'user1',
            'email' => 'utilizador11@email.com',
            'password' => Hash::make('user123'),
        ]);
        //
    }
}
