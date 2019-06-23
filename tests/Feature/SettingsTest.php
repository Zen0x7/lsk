<?php

namespace Tests\Feature;

use Illuminate\Support\Str;
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

    public function test_settings_profile_route()
    {
        $user = factory(User::class)->create();
        $response = $this->actingAs($user)
            ->get('/settings/profile');
        $response->assertStatus(200);
    }

    public function test_settings_account_route()
    {
        $user = factory(User::class)->create();
        $response = $this->actingAs($user)
            ->get('/settings/account');
        $response->assertStatus(200);
    }

    public function test_settings_organizations_route()
    {
        $user = factory(User::class)->create();
        $response = $this->actingAs($user)
            ->get('/settings/organizations');
        $response->assertStatus(200);
    }

    public function test_settings_notifications_route()
    {
        $user = factory(User::class)->create();
        $response = $this->actingAs($user)
            ->get('/settings/notifications');
        $response->assertStatus(200);
    }

    public function test_settings_sessions_route()
    {
        $user = factory(User::class)->create();
        $response = $this->actingAs($user)
            ->get('/settings/sessions');
        $response->assertStatus(200);
    }

    public function test_profile_update_profile_route()
    {
        $user = factory(User::class)->create();
        $name = factory(User::class)->make()->name;
        $response = $this->actingAs($user)
            ->post('/settings/profile/update-profile', [
            'name' => $name,
        ]);
        $response->assertStatus(302);
        $user_response = $this->actingAs($user, 'api')
            ->json('GET', '/api/user');
        $user_response->assertSee($name);
    }

    public function test_account_update_email_route()
    {
        $user = factory(User::class)->create();
        $email = factory(User::class)->make()->email;
        $response = $this->actingAs($user)
            ->post('/settings/account/update-email', [
                'new_email' => $email,
            ]);
        $response->assertStatus(200)
            ->assertSee($email);
        $user_response = $this->actingAs($user, 'api')
            ->json('GET', '/api/user');
        $user_response->assertSee($email);
    }

    public function test_account_update_password_route()
    {
        $user = factory(User::class)->create();
        $password = Str::random(8);
        $response = $this->actingAs($user)
            ->post('/settings/account/update-password', [
                'password' => $password,
                'password_confirmation' => $password,
            ]);
        $response->assertStatus(200);
    }

    public function test_create_organization_route()
    {
        $user = factory(User::class)->create();
        $name = Str::random(8);
        $response = $this->actingAs($user, 'api')
            ->post('/api/organizations/', [
                'name' => $name,
            ]);
        $response->assertStatus(201);
    }
}
