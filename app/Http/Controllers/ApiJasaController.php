<?php

namespace App\Http\Controllers;

use App\Models\Jasa;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ApiJasaController extends Controller
{
    public function getAll(Request $request): JsonResponse
    {
        $jasas = Jasa::all();
        return response()->json([
            'success' => true,
            'data' => $jasas
        ]);
    }

    public function getOne(string $code): JsonResponse
    {
        try {
            $jasa = Jasa::findOrFail($code);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'errors' => [
                    'code' => ['Jasa not found']
                ]
            ], 400);
        }

        return response()->json([
            'success' => true,
            'data' => $jasa
        ]);
    }
}
