<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Subscriber;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class SubscriberController extends Controller
{
    public function store(Request $request): \Illuminate\Http\JsonResponse
    {
        try {
            $validated = $request->validate([
                'email' => 'required|unique:subscribers,email',
            ]);

            Subscriber::query()->firstOrCreate($validated);

            return response()->json(['message' => 'Subscriber added successfully'], 201);
        } catch (ValidationException $e) {
            return response()->json([
                'message' => 'Email already subscribed',
                'errors' => $e->errors(),
            ], 422);
        }
    }
}
