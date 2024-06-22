<?php

namespace App\Http\Controllers;

use App\Models\Type;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ApiTypeController extends Controller
{
    public function getAll(Request $request): JsonResponse
    {
        $categoryCode = $request->query('category_code');
        if ($categoryCode) {
            $types = Type::where('status', 'Active')->where('category_code', $categoryCode)->get();
        } else {
            $types = Type::where('status', 'Active')->get();
        }

        $typesArr = $types->map(function ($type) {
            return [
                'code' => $type->code,
                'category_code' => $type->category_code,
                'name' => $type->name,
                'image_url' => env('APP_URL') . $type->image_path,
                'kiloan' => $type->kiloan,
                'description' => $type->description,
            ];
        });

        return response()->json([
            'success' => true,
            'data' => $typesArr
        ]);
    }

    public function getOne(string $code): JsonResponse
    {
        try {
            $type = Type::where('status', 'Active')->where('code', $code)->firstOrFail();
        } catch (Exception $e) {
            return response()->json([
                'success' => false,
                'errors' => [
                    'code' => [
                        'Type not found'
                    ]
                ]
            ], 400);
        }

        $typeArr = [
            'code' => $type->code,
            'category_code' => $type->category_code,
            'name' => $type->name,
            'image_url' => env('APP_URL') . $type->image_path,
            'kiloan' => $type->kiloan,
            'description' => $type->description,
        ];

        return response()->json([
            'success' => true,
            'data' => $typeArr
        ]);
    }
}
