<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\Project;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class ProjectControllerTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_create_user_then_stores_data_project()
    {
        $data = [
            'id' => 5,
            'name' => 'Test',
            'email' => 'test@contohspatie.com',
            'password' => Hash::make('21oke4nc'),
        ];
        $user = User::create($data);
        $response = $this->actingAs($user)->post(route('project.store'), [
            'name' => fake()->name(),
            'owner' => fake()->name(),
            'deadline' => fake()->date(),
            'progress' => fake()->numberBetween(50,99),
            'description' => fake()->paragraph(2),
            'leader_id' => fake()->numberBetween(1,3)
        ]);
        $response->assertStatus(302);
        $response->assertRedirect(route('project.index'));
    }
}
