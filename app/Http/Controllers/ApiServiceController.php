<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ApiServiceController extends Controller
{
    public function getAll(Request $request): JsonResponse
    {
        $productCode = $request->query('product_code');

        if ($productCode) {
            $services = Service::where('product_code', $productCode)->get();
        } else {
            $services = Service::all();
        }

        return response()->json([
            'success' => true,
            'data' => $services
        ]);
    }

    public function getOne(string $id): JsonResponse
    {
        try {
            $service = Service::where('id', $id)->firstOrFail();
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'errors' => [
                    'code' => ['Service not found']
                ]
            ], 400);
        }

        return response()->json([
            'success' => true,
            'data' => $service
        ]);
    }
}
