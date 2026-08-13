<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('kddi_webhook_events', function (Blueprint $table) {
            $table->id();
            $table->string('channel');          // rcs / plus_message
            $table->string('event_type')->nullable();
            $table->string('message_id')->nullable();
            $table->json('payload');
            $table->timestamp('received_at');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kddi_webhook_events');
    }
};
