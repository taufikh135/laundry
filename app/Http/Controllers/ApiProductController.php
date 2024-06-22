<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ApiProductController extends Controller
{
    public function getAll(Request $request): JsonResponse
    {
        $typeCode = $request->query('type_code');

        if ($typeCode) {
            $products = Product::where('type_code', $typeCode)->where('status', 'Active')->get();
        } else {
            $products = Product::where('status', 'Active')->get();
        }

        $products->makeHidden(['status']);
        $products = $products->map(function ($product) {
            $product->image_url = env('APP_URL') . '/images' . $product->image_path;
            $product->makeHidden(['image_path']);
            return $product;
        });

        return response()->json([
            'success' => true,
            'data' => $products
        ]);
    }

    public function getOne(string $code): JsonResponse
    {
        try {
            $product = Product::where('code', $code)->where('status', 'Active')->firstOrFail();
        } catch (Exception) {
            return response()->json([
                'success' => false,
                'errors' => [
                    'code' => ['Product not found']
                ]
            ], 400);
        }

        $product->image_url = env('APP_URL') . '/images' . $product->image_path;
        $product->makeHidden(['status', 'image_path']);

        return response()->json([
            'success' => true,
            'data' => $product
        ]);
    }
}
