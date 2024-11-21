<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory;

    // Define fillable properties
    protected $fillable = [
        'title',
        'slug',
        'image',
        'description',
        'is_active',
    ];

    // Scope for search functionality
    public function scopeSearch($query, $value)
    {
        $query->where("title", "like", "%{$value}%");
    }

    // Automatically generate slug from title
    public static function boot()
    {
        parent::boot();

        static::saving(function ($article) {
            if (!$article->slug) {
                $article->slug = Str::slug($article->title);
            }
        });
    }
}
