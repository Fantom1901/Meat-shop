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
        Schema::create('visits', function (Blueprint $table) {
            $table->id();
            $table->string('url')->nullable(); // Посещенный URL
            $table->string('ip_address', 45)->nullable(); // IP пользователя (опционально)
            $table->string('user_agent', 512)->nullable(); // User Agent (опционально)
            $table->foreignId('user_id')->nullable()->constrained()->onDelete('set null'); // Если пользователь авторизован
            $table->timestamps(); // created_at будет временем посещения
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visits');
    }
};
