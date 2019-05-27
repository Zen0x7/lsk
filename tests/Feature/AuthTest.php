<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class AuthTest extends TestCase
{
    use RefreshDatabase;

    public function test_redirect_if_authenticated()
    {
        $user = factory(User::class)->create();
        $response = $this->actingAs($user)
            ->get('/login');
        $response->assertRedirect('home');
    }

    public function test_reset_password_route()
    {
        $response = $this->get('/password/reset');
        $response->assertStatus(200);
    }

    public function test_register_route()
    {
        $user = factory(User::class)->make();
        $password = substr(md5(mt_rand()), 0, 8);
        $response = $this->post('/register', [
            'name' => $user->name,
            'email' => $user->email,
            'password' => $password,
            'password_confirmation' => $password,
        ]);
        $response->assertRedirect('home');
    }

    public function test_home_route()
    {
        $user = factory(User::class)->create();
        $response = $this->actingAs($user)
            ->get('/home');
        $response->assertStatus(200);
    }

    public function test_reset_password_constructor()
    {
        $user = factory(User::class)->make();
        $response = $this->post('/password/reset', [
            'email' => $user->email,
        ]);
        $response->assertStatus(302);
    }
}
