<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str; // Добавьте этот импорт

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name',
        'description',
        'price',
        'stock',
        'image',
        'category_id',
        'is_published',
    ];

    protected $casts = [
        'price' => 'float',
        'stock' => 'integer',
        'is_published' => 'boolean',
    ];

    // ... другие методы модели, если есть (например, relationship category())

    /**
     * Get the limited description for display purposes (e.g., in index tables).
     *
     * @return string
     */
    public function getLimitedDescriptionAttribute(): string
    {
        // Используем хелпер Str::limit для ограничения текста
        return Str::limit($this->description, 50, '...'); // 50 - лимит символов, '...' - что добавить в конце
    }

    // Get the category that owns the post.
    public function category(): BelongsTo{
        return $this->belongsTo(category::class);
    }
}
