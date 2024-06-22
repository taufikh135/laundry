<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ApiCategoryController extends Controller
{
    private string $baseUrl;

    public function __construct()
    {
        $this->baseUrl = env('APP_URL') . '/api/categories';
    }

    public function getAll(): JsonResponse
    {
        $categories = Category::where('status', '=', 'Active')->get();
        $categories = $categories->map(function ($category) {
            return [
                'code' => $category->code,
                'name' => $category->name,
                'image_url' => env('APP_URL') . $category->image_path
            ];
        });

        return response()->json([
            'success' => true,
            'data' => $categories
        ]);
    }

    public function get(string $code): JsonResponse
    {
        try {
            $category = Category::where('code', '=', $code)->where('status', '=', 'Active')->firstOrFail();
        } catch (Exception $e) {
            return response()->json([
                'success' => false,
                'errors' => [
                    'code' => [
                        'Category not found'
                    ]
                ]
            ], 400);
        }

        $category = [
            'code' => $category->code,
            'name' => $category->name,
            'image_url' => env('APP_URL') . $category->image_path
        ];

        return response()->json([
            'success' => true,
            'data' => $category
        ]);
    }
}
