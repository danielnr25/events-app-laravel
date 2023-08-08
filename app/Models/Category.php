<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ["title", "slug", "image"];

    public function events()
    {
        return $this->belongsToMany(Event::class);
    }

    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }

    public function imagePath(){
        return sprintf("%s/%s", "storage/categories", $this->image);
    }
}
