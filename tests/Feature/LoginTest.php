<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LoginTest extends TestCase
{

    public function test_register(): void
    {
        $credentials = [
            'email' => 'johndoe@example.com',
            'password' => 'password123',
        ];

        $response = $this->post('/login', $credentials);

        $response->assertStatus(302)->assertRedirect('/');
    }
}
