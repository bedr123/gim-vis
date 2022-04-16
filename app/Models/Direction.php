<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Direction extends Model
{
    use HasFactory, Sluggable;

    protected $fillable = [
        'naziv',
        'opis',
        'ikonica',
        'kontent',
        'slug'
    ];

    public function images()
    {
        return $this->hasMany(DirectionGallery::class);
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'naziv'
            ]
        ];
    }
}
