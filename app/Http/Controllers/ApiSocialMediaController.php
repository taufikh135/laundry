<?php

namespace App\Http\Controllers;

use App\Models\SocialMedia;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ApiSocialMediaController extends Controller
{
    public function getAll(): JsonResponse
    {
        $socialMedia = SocialMedia::all();

        return response()->json([
            'success' => true,
            'data' => $socialMedia
        ]);
    }
}
