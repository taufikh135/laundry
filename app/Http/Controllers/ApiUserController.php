<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Services\JWTService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class ApiUserController extends Controller
{
    public function current(): JsonResponse
    {
        return response()->json([
            'success' => true,
            'data' => Auth::user()
        ]);
    }

    public function updateCurrent(Request $request): JsonResponse
    {
        try {
            $data = $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'address' => ['required', 'string', 'max:255'],
            ]);
        } catch (ValidationException $e) {
            return response()->json([
                'success' => false,
                'errors' => $e->errors()
            ], 400);
        }

        $userId = Auth::user()->id;

        try {
            $user = User::findOrFail($userId);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'errors' => [
                    'id' => ['User not found']
                ]
            ], 400);
        }

        $user->update([
            'name' => $data['name'],
            'address' => $data['address']
        ]);

        return response()->json([
            'success' => true,
            'data' => $user
        ]);
    }
}
