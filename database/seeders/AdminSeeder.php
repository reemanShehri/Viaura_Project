<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
       User::updateOrCreate(
    ['email' => 'admin@viaura.com'],  // شرط البحث
    [
        'name' => 'Admin',
        'password' => Hash::make('admin123'),
        'role' => 'admin',
    ]
);
    }
}
