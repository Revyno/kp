<?php
// app/Models/Gallery.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;


class Galleries extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = [
        'title',
        'description',
        'type',
        'file_path',
        'thumbnail_path',
        'tags',
        'taken_date',
        'is_featured',
        'is_public',
    ];

    protected $casts = [
        'tags' => 'array',
        'taken_date' => 'date',
        'is_featured' => 'boolean',
        'is_public' => 'boolean',
    ];

    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }

    public function scopePublic($query)
    {
        return $query->where('is_public', true);
    }

    public function scopeByType($query, $type)
    {
        return $query->where('type', $type);
    }
}