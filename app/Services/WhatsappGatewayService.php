<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class WhatsappGatewayService
{
    private string $deviceId;
    private string $apiKey;
    private string $url = 'https://wapisender.id/api/v5';

    public function __construct()
    {
        $this->deviceId = env('WHATSAPP_GATEWAY_DEVICE_ID');
        $this->apiKey = env('WHATSAPP_GATEWAY_API_KEY');
    }

    public function sendMessage(string $numberPhone, string $message): bool
    {
        $response = Http::asForm()->post(url: "{$this->url}/message/text", data: [
            'api_key' => $this->apiKey,
            'device_key' => $this->deviceId,
            'destination' => $numberPhone,
            'message' => $message
        ]);

        $responseJson = $response->json();

        return $responseJson['status'] === 'ok';
    }
}
