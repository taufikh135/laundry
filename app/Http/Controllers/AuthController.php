<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AuthController extends Controller
{
    public function verification(string $token): Response
    {
        $user = null;

        try {
            $user = User::where('number_phone_verified_token', $token)->firstOrFail();
        } catch (\Exception) {
            abort(404);
        }

        $user->number_phone_verified_at = now();
        $user->number_phone_verified_token = null;
        $user->update();

        if ($user->role === 'Admin') {
            return redirect('/auth/login')->with([
                'alert' => [
                    'type' => 'success',
                    'message' => 'Nomor Kamu berhasil diverifikasi, Silahkan login.'
                ]
            ]);
        }

        return response()->view('auth.m-verification-validate', [
            'success' => true,
            'title' => 'Verification Success',
            'message' => 'Nomor Kamu berhasil diverifikasi, Silahkan login.'
        ]);
    }
}
