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
        // $faker = Factory::create();

        $data = [
            'id' => 5,
            'name' => 'Chdaunv',
            'email' => 'chdaunv@contohspatie.com',
            'password' => Hash::make('21oke4nc'),
        ];

        $user = User::create($data);
        $user->assignRole('user');
        // User::factory(1)->create();
    }
}
