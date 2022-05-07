<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Project extends Model
{
    use HasFactory, Sluggable;

    protected $fillable = [
        'naziv', 
        'slika', 
        'kontent',
        'slug',
        'thumb'
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'naziv'
            ]
        ];
    }
}
