<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDeletedAtToPostsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            // Добавляет столбец 'deleted_at' типа TIMESTAMP с возможностью NULL
            // и создает индекс. Это стандартный метод для SoftDeletes.
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            // Удаляет столбец 'deleted_at' при откате миграции
            $table->dropSoftDeletes();
        });
    }
}
