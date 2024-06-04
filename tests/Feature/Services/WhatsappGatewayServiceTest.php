<?php

namespace Tests\Feature\Services;

use App\Services\WhatsappGatewayService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class WhatsappGatewayServiceTest extends TestCase
{
    private WhatsappGatewayService $whatsappGatewayService;
    protected function setUp(): void
    {
        parent::setUp();
        $this->whatsappGatewayService = $this->app->make(WhatsappGatewayService::class);
    }

    public function testSendMessage(): void
    {
        $this->whatsappGatewayService->sendMessage('6281317826173', 'test');
        self::assertTrue(true);
    }
}
