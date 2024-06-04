<?php

namespace Tests\Feature\Controllers;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ApiAuthControllerTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
        User::query()->forceDelete();
    }

    public function testRegister(): void
    {
        $response = $this->postJson('/api/auth/register', [
            'name' => 'test',
            'number_phone' => '6281317826173',
            'password' => 'test123',
        ]);
        $response->assertStatus(200);
        $response->assertJson([
            'success' => true
        ]);
    }

    public function testRegisterFailed(): void
    {
        $response = $this->postJson('/api/auth/register', []);
        $response->assertStatus(400);
        $response->assertJsonStructure([
            'errors' => [
                'name',
                'number_phone',
                'password'
            ]
        ]);
    }

    public function testVerification(): void
    {
        $this->testRegister();
        $user = User::first();
        $response = $this->postJson('/api/auth/verification', [
            'number_phone' => $user->number_phone,
        ]);
        $response->assertStatus(200);
    }
}
