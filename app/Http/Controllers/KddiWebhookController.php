<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class KddiWebhookController extends Controller
{
    public function rcs(Request $request): JsonResponse
    {
        $payload = $request->all();

        \Log::info('KDDI RCS Webhook', [
            'payload' => $payload,
        ]);

        return response()->json([
            'status' => 'ok',
        ], 200);
    }

    public function plusMessage(Request $request): JsonResponse
    {
        $payload = $request->all();

        \Log::info('KDDI +Message Webhook', [
            'payload' => $payload,
        ]);

        return response()->json([
            'status' => 'ok',
        ], 200);
    }
}