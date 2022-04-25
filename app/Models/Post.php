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
        'category_id',
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

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function employees()
    {
        return $this->belongsToMany(Employee::class);
    }
}
