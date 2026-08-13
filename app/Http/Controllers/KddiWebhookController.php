<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KddiWebhookController extends Controller
{
    public function rcs(Request $request)
    {
        DB::table('kddi_webhook_events')->insert([
            'channel' => 'rcs',
            'event_type' => null,
            'message_id' => $request->input('message_id'),
            'payload' => $request->getContent(),
            'received_at' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return response()->json(['status' => 'ok']);
    }

    public function plus_message(Request $request)
    {
        DB::table('kddi_webhook_events')->insert([
            'channel' => 'plus_message',
            'event_type' => null,
            'message_id' => $request->input('message_id'),
            'payload' => $request->getContent(),
            'received_at' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return response()->json(['status' => 'ok']);
    }
}
