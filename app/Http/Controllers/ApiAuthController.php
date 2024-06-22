<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Services\JWTService;
use App\Services\TokenService;
use App\Services\WhatsappGatewayService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\ValidationException;

class ApiAuthController extends Controller
{
    public function __construct(
        private WhatsappGatewayService $whatsappGatewayService,
        private TokenService $tokenService,
        private JWTService $jwtService
    ) {
        //
    }

    public function register(Request $request): JsonResponse
    {
        $data = [];

        try {
            $data = $request->validate([
                'name' => ['required', 'string'],
                'number_phone' => ['required', 'string', 'min:10', 'max:15', 'unique:users,number_phone', 'regex:/^62/'],
                'password' => ['required', 'string'],
                'address' => ['required', 'string'],
                'password_confirmation' => ['required', 'string', 'same:password']
            ], [
                'number_phone.regex' => 'Nomor Whatsapp harus dimulai dengan 62'
            ]);
        } catch (ValidationException $e) {
            return response()->json([
                'success' => false,
                'errors' => $e->errors()
            ], 400);
        }

        $data['password'] = Hash::make($data['password']);
        User::create($data);

        return response()->json([
            'success' => true
        ]);
    }

    public function verification(Request $request): JsonResponse
    {
        $data = [];

        try {
            $data = $request->validate([
                'number_phone' => ['required', 'string', 'exists:users,number_phone'],
            ]);
        } catch (ValidationException $e) {
            return response()->json([
                'success' => false,
                'errors' => $e->errors()
            ], 400);
        }

        $user = User::where('number_phone', $data['number_phone'])->first();

        if ($user->number_phone_verified_at) {
            return response()->json([
                'success' => false,
                'errors' => [
                    'number_phone' => ['Nomor Whatsapp ' . $user->number_phone . ' sudah terverifikasi']
                ]
            ], 400);
        }

        $user->number_phone_verified_token = $this->tokenService->generate();
        $user->update();


        $message = "Klik link dibawah ini untuk verifikasi.\n\n" . env('APP_URL') . "/auth/verification/" . $user->number_phone_verified_token;
        $this->whatsappGatewayService->sendMessage($user->number_phone, $message);

        return response()->json([
            'success' => true,
            'message' => 'Link verifikasi berhasil dikirimkan ke nomor Whatsapp ' . $user->number_phone
        ]);
    }

    public function forgotPassword(Request $request): JsonResponse
    {
        $data = [];

        try {
            $data = $request->validate([
                'number_phone' => ['required', 'string', 'exists:users,number_phone'],
            ]);
        } catch (ValidationException $e) {
            return response()->json([
                'success' => false,
                'errors' => $e->errors()
            ], 400);
        }

        $user = User::where('number_phone', $data['number_phone'])->first();
        $user->reset_password_token = $this->tokenService->generate();
        $user->update();

        $message = "Klik link dibawah ini untuk reset password.\n\n" . env('APP_URL') . "/auth/reset-password" . $user->number_phone_verified_token;
        $this->whatsappGatewayService->sendMessage($user->number_phone, $message);

        return response()->json([
            'success' => true,
            'message' => 'Link ganti password berhasil dikirimkan ke nomor Whatsapp ' . $user->number_phone
        ]);
    }

    public function login(Request $request): JsonResponse
    {
        $data = [];

        try {
            $data = $request->validate([
                'number_phone' => ['required', 'string', 'exists:users,number_phone'],
                'password' => ['required', 'string']
            ]);
        } catch (ValidationException $e) {
            return response()->json([
                'success' => false,
                'errors' => $e->errors()
            ], 400);
        }

        if (!Auth::attempt($data)) {
            return response()->json([
                'success' => false,
                'errors' => [
                    'password' => ['Password salah.']
                ]
            ], 400);
        }

        $payload = [
            'user' => [
                'id' => Auth::user()->id
            ]
        ];

        $jwt = $this->jwtService->encode($payload);

        return response()->json([
            'success' => true,
            'data' => [
                'token' => $jwt
            ]
        ]);
    }
}
