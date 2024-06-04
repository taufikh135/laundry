<?php

namespace Tests\Feature\Models;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
        User::query()->forceDelete();
    }

    public function testCreate(): User
    {
        $user = User::create([
            'name' => 'Test User',
            'number_phone' => '08123456789',
            'password' => 'rahasia123',
        ]);

        self::assertNotNull($user);

        return $user;
    }

    public function testDelete(): void
    {
        $user = $this->testCreate();
        $user->delete();

        self::assertNotNull($user->deleted_at);
    }

    public function testUpdate(): void
    {
        $user = $this->testCreate();
        $user->update([
            'name' => 'Test User Updated',
        ]);

        self::assertEquals('Test User Updated', User::find($user->id)->name);
    }
}
