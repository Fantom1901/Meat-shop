<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany; // Для обратной связи
use Illuminate\Database\Eloquent\SoftDeletes; // Если нужна функция мягкого удаления

class Category extends Model
{
    use HasFactory;
    use SoftDeletes; // Опционально: если вы хотите иметь возможность мягко удалять категории

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        // Можно добавить другие поля, например, 'slug', 'description', 'parent_id' и т.д.
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'deleted_at' => 'datetime', // Необходимо, если используется SoftDeletes
    ];


    /**
     * Get the posts for the category.
     * Это обратная связь "один ко многим"
     *
     * @return HasMany
     */
    public function posts(): HasMany
    {
        // Связь "один ко многим": одна категория имеет много постов
        return $this->hasMany(Post::class);
    }
}
