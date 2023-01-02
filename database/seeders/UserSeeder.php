<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'Admin',
                'email' => 'admin@admin',
                'password' => Hash::make('123456789'),
            ],
            [
                'name' => 'Guest',
                'email' => 'guest@contohspatie.com',
                'password' => Hash::make('123456789'),
            ],
            [
                'name' => 'Farhan',
                'email' => 'farhan@contohspatie.com',
                'password' => Hash::make('123456789'),
            ],
            [
                'name' => 'Rizki',
                'email' => 'rizki@contohspatie.com',
                'password' => Hash::make('123456789'),
            ],
            [
                'name' => 'Syarbini',
                'email' => 'syarbini@contohspatie.com',
                'password' => Hash::make('123456789'),
            ],
            [
                'name' => 'Oka',
                'email' => 'oka@contohspatie.com',
                'password' => Hash::make('123456789'),
            ],
            [
                'name' => 'Ridha',
                'email' => 'ridha@contohspatie.com',
                'password' => Hash::make('123456789'),
            ],
        ];
        foreach ($data as $item) {
            $user = User::create($item);
            if ($user->name == "Admin") {
                $user->assignRole('superadmin');
            } else {
                $user->assignRole('user');
            }
        }

    }
}
