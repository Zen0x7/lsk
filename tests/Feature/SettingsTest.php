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
}
