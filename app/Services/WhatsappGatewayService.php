<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class WhatsappGatewayService
{
    private string $deviceId;
    private string $url = 'https://app.whacenter.com/api';

    public function __construct()
    {
        $this->deviceId = env('WHATSAPP_GATEWAY_DEVICE_ID');
    }

    public function sendMessage(string $numberPhone, string $message): bool
    {
        Http::asForm()->post(url: "{$this->url}/send", data: [
            'device_id' => $this->deviceId,
            'number' => $numberPhone,
            'message' => $message
        ]);

        return true;
    }
}
