<?php

namespace App\Models;

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

    public function scopeSearch($query, $value)
    {
        $query->where("title", "like", "%{$value}%");
    }
}
