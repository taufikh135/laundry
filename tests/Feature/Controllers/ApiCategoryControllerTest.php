<?php

namespace Tests\Feature\Controllers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ApiCategoryControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function testGetAll(): void
    {
        $response = $this->getJson('/api/categories')->assertOk();
        var_dump($response);
    }
}
