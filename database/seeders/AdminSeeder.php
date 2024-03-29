<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'phone_number' => 254718020630,
            'mpesa_phone_number' => 254718020630,
            'whatsapp_phone_number' => 254718020630,
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        ])->assignRole('author', 'admin');
        User::create([
            'name' => 'author',
            'email' => 'author@gmail.com',
            'email_verified_at' => now(),
            'phone_number' => 254718020631,
            'mpesa_phone_number' => 254718020631,
            'whatsapp_phone_number' => 254718020631,
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        ])->assignRole('author');
        User::create([
            'name' => 'buyer',
            'email' => 'buyer@gmail.com',
            'email_verified_at' => now(),
            'phone_number' => 254718020632,
            'mpesa_phone_number' => 254718020632,
            'whatsapp_phone_number' => 254718020632,
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        ])->assignRole('buyer');
    }
}
