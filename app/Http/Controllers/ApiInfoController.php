<?php

namespace App\Http\Controllers;

use App\Models\Info;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ApiInfoController extends Controller
{
    public function getAll(): JsonResponse
    {
        $infos = Info::all();
        $infos = $infos->map(function ($info) {
            return [
                'id' => $info->id,
                'title' => $info->title,
                'content' => $info->content,
                'image_url' => env('APP_URL') . $info->image_path,
                'redirect_url' => $info->redirect_url,
                'created_at' => $info->created_at,
                'updated_at' => $info->updated_at
            ];
        });
        return response()->json([
            'success' => true,
            'data' => $infos
        ]);
    }

    public function getOne(int $id): JsonResponse
    {
        try {
            $info = Info::findOrFail($id);
            $infoArr = [
                'id' => $info->id,
                'title' => $info->title,
                'content' => $info->content,
                'image_url' => env('APP_URL') . $info->image_path,
                'redirect_url' => $info->redirect_url,
                'created_at' => $info->created_at,
                'updated_at' => $info->updated_at
            ];

            return response()->json([
                'success' => true,
                'data' => $infoArr
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'errors' => [
                    'message' => [
                        'Info not found'
                    ]
                ]
            ], 400);
        }
    }
}
