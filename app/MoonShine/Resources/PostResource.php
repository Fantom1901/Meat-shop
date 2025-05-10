<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\MoonShine\Resources\CategoryResource;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;
use App\Models\Category;

use MoonShine\Laravel\Resources\ModelResource;
use MoonShine\UI\Components\Layout\Box;
use MoonShine\UI\Fields\ID;
use MoonShine\UI\Fields\Text;
use MoonShine\UI\Fields\Number;
use MoonShine\UI\Fields\Image;
use MoonShine\Laravel\Fields\Relationships\BelongsTo;
use MoonShine\UI\Fields\Checkbox;
use MoonShine\UI\Fields\Textarea;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\Support\Attributes\Icon;

#[Icon('s.rectangle-stack')]

/**
 * @extends ModelResource<Post>
 */
class PostResource extends ModelResource
{
    protected string $model = Post::class;

    protected string $title = 'Посты';

    protected array $search = ['id', 'name', 'description']; // Поиск по исходному description

    protected array $with = ['category'];

    /**
     * @return list<FieldContract>
     */
    protected function indexFields(): iterable
    {
        return [
            ID::make()->sortable(),
            Text::make('Название', 'name' )->sortable(),
            Text::make('Описание', 'limited_description')->sortable(),
            Number::make('Цена', 'price')->sortable(),
            Number::make('На складе', 'stock')->sortable(),
            Image::make('Изображение', 'image')->removable(),
            BelongsTo::make('Категория', 'category', resource: CategoryResource::class),
            Checkbox::make('Опубликовано', 'is_published')->sortable(),
        ];
    }

    /**
     * @return list<ComponentContract|FieldContract>
     */
    protected function formFields(): iterable
    {
        return [
            Box::make([
                ID::make()->readonly(),
                Text::make('Название', 'name')->required(),
                Textarea::make('Описание', 'description')
                    ->required()
                    ->CustomAttributes(['rows' => 5]),
                Number::make('Цена', 'price')->required()->step(0.01),
                Number::make('На складе', 'stock')->required()->buttons(),
                Image::make('Изображение', 'image')->dir('images/posts')->removable(),
                BelongsTo::make('Категория', 'category', resource: CategoryResource::class)->required(),
                Checkbox::make('Опубликовано', 'is_published'),
            ])
        ];
    }

    /**
     * @return list<FieldContract>
     */
    protected function detailFields(): iterable
    {
        return [
            ID::make(),
            Text::make('Название', 'name'),
            Textarea::make('Описание', 'description')
                ->customAttributes(['rows' => 5]),
            Number::make('Цена', 'price'),
            Number::make('На складе', 'stock'),
            Image::make('Изображение', 'image'),
            BelongsTo::make('Категория', 'category', resource: CategoryResource::class)->required(),
            Checkbox::make('Опубликовано', 'is_published'),
            Text::make('Создано', 'created_at'),
            Text::make('Обновлено', 'updated_at'),
            Text::make('Удалено', 'deleted_at'),
        ];
    }

    /**
     * @param Post $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    protected function rules(mixed $item): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'price' => ['required', 'numeric', 'min:0'],
            'stock' => ['required', 'integer', 'min:0'],
            'image' => ['nullable', 'image', 'max:2048'],
            'category_id' => ['required', 'exists:categories,id'],
            'is_published' => ['boolean'],
        ];
    }
}
