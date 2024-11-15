<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Module extends Model
{
    use HasFactory;

    // Define fillable properties
    protected $fillable = [
        'title',
        'slug',
        'image',
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

        static::saving(function ($module) {
            if (!$module->slug) {
                $module->slug = Str::slug($module->title);
            }
        });
    }
}
