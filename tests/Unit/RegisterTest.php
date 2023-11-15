<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RegisterTest extends TestCase
{
    // use RefreshDatabase;

    public function test_register(): void
    {
        $this->artisan('migrate:refresh --seed');

        $credentials = [
            'name' => 'John Doe',
            'address' => '123 Main St',
            'username' => 'johndoe',
            'email' => 'johndoe@example.com',
            'age' => 25,
            'shoe_size' => 9.5,
            'password' => 'password123',
            'image' => 'https://steamuserimages-a.akamaihd.net/ugc/1857187012334448031/32AF31138B26690A2A066481835677493DF16178/?imw=512&&ima=fit&impolicy=Letterbox&imcolor=%23000000&letterbox=false',
        ];

        $response = $this->post('/register', $credentials);

        // $response->assertStatus(200);
        $response->assertStatus(302)->assertRedirect('/login');
    }
}
