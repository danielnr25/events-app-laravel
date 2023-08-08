<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        "user_id", "title", "slug", "extract", "description", "imagen", "price", "phone", "address", "city", "contact", "web", "published"
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }


    public function imagePath()
    {
        return sprintf("%s/%s", "storage/events", $this->imagen);
    }

    public function scopesearch($query, $title)
    {
        return $query->where('title', 'LIKE', "%$title%");
    }

    public function scopeFiltered(Builder $builder, Category $category = null)
    {
        if ($category) {
            $builder->whereHas("categories", function (Builder $query) use ($category) {
                $query->where("categories.id", $category->id); // Agregamos el alias 'categories' a la columna 'id'
            });
        }

        return $builder->paginate(6);
    }
}
