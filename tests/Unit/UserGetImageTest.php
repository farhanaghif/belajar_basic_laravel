<?php

namespace Tests\Unit;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use PHPUnit\Framework\TestCase;

class UserGetImageTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_user_get_image_formatted_successfully()
    {
        // $user = User::create([]);
        $data = [
            'id' => 5,
            'name' => 'test',
            'email' => 'test@contohspatie.com',
            'password' => Hash::make('21oke4nc'),
        ];

        $user = User::create($data);
        $user->assignRole('user');
        $this->assertEquals('t',$user->get_image);
    }
}
