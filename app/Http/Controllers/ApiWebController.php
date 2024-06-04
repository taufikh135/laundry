<?php

namespace App\Http\Controllers;

use App\Models\Web;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ApiWebController extends Controller
{
    public function getSyaratKetentuan(): JsonResponse
    {
        $web = Web::first();
        return response()->json([
            'success' => true,
            'data' => [
                'content' => $web->syarat_ketentuan
            ]
        ]);
    }
}
