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
        Schema::create('sport_event', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('type');
            $table->boolean('available_ticket');
            $table->foreignId('matching_id')
                ->constrained(table:'matching')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreignId('ticket_id')
                ->constrained(table:'ticket')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sport_event');
    }
};
