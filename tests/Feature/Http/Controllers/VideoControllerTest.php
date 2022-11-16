<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\User;
use Tests\TestCase;
use App\Models\Video;
use Illuminate\Support\Str;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;

class VideoControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_create_video()
    {
        $data = [
            'id' => 5,
            'name' => 'video',
            'email' => 'video@contohspatie.com',
            'password' => Hash::make('21oke4nc'),
        ];

        $user = User::create($data);
        do {
            $code = Str::random(12);
        } while (
            Video::where('code', $code)->first()
        );
        $response = $this->actingAs($user)->post(route('video.store'), [
            'title' => "Yiruma Piano",
            'user_id' => 1,
            'code' => $code,
            'url' => '<iframe width="560" height="315" src="https://www.youtube.com/watch?v=9L5cdoBPryY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem fugit commodi dolorum omnis dolores blanditiis odit, perferendis, hic vero reprehenderit natus consequuntur cupiditate, quos corrupti quia laudantium amet est quis. Corrupti inventore ipsum, in hic cum rerum numquam molestiae placeat, at esse amet excepturi odit, aliquam aut deleniti earum incidunt.',
            'publish' => 1
        ]);
        $response->assertStatus(302);
        $response->assertRedirect(route('video'));
    }
}
