<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    use HasFactory, Sluggable;

    protected $fillable = [
        'naslov',
        'slug',
        'slika',
        'kontent',
        'autor',
        'thumb'
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'naslov'
            ]
        ];
    }

    public function employees()
    {
        return $this->belongsToMany(Employee::class);
    }
}
