<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Section extends Model
{
    use HasFactory, Sluggable;

    protected $fillable = [
        'naziv', 
        'kategorija', 
        'broj_grupa', 
        'broj_ucenika', 
        'sedmicni_fond_sati', 
        'profesori',
        'slug'
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'naziv'
            ]
        ];
    }

    public function employees()
    {
        return $this->belongsToMany(Employee::class);
    }
}
