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
        Schema::create('categories', function (Blueprint $table) {
            $table->id(); // Поле ID (primary key)
            $table->string('name')->unique(); // Поле для названия категории, делаем его уникальным
            // $table->string('slug')->unique()->nullable(); // Опционально: если нужен slug
            // $table->text('description')->nullable(); // Опционально: если нужно описание
            // $table->foreignId('parent_id')->nullable()->constrained('categories')->onDelete('set null'); // Опционально: для вложенных категорий

            $table->timestamps(); // Поля created_at и updated_at
            $table->softDeletes(); // Опционально: поле deleted_at для мягкого удаления (соответствует use SoftDeletes в модели)
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
