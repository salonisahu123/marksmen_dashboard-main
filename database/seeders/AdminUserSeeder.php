<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        User::where('email', 'admin@marksmengroup.com')->delete();

        User::updateOrCreate(
            [
                'email' => 'admin@12gmail.com',
            ],
            [
                'name' => 'admin',
                'mobile' => '9999999999',
                'role' => 'admin',
                'password' => Hash::make('12345678'),
            ]
        );
    }
}
