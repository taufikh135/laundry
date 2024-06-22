<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ApiContactController extends Controller
{
    public function get(string $id): JsonResponse
    {
        try {
            $contact = Contact::findOrFail($id);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'errors' => [
                    'id' => ['Contact not found']
                ]
            ], 400);
        }

        return response()->json([
            'success' => true,
            'data' => $contact
        ]);
    }

    public function getAll(): JsonResponse
    {
        $contacts = Contact::all();

        return response()->json([
            'success' => true,
            'data' => $contacts
        ]);
    }
}
