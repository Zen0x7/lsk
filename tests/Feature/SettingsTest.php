<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class SettingsTest extends TestCase
{
    use RefreshDatabase;

    public function test_settings_route()
    {
        $user = factory(User::class)->create();
        $response = $this->actingAs($user)
            ->get('/settings');
        $response->assertStatus(200);
    }

    public function test_update_profile_route()
    {
        $user = factory(User::class)->create();
        $name = factory(User::class)->make()->name;
        $response = $this->actingAs($user)
            ->post('/settings/update-profile', [
            'name' => $name,
        ]);
        $response->assertStatus(302)
            ->assertRedirect('/settings');
        $user_response = $this->actingAs($user, 'api')
            ->json('GET', '/api/user');
        $user_response->assertSee($name);
    }
}
