<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Asset extends Model
{
    use HasFactory, Sluggable;

    protected $fillable = [
        'naziv', 
        'kontent',
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

    public function members()
    {
        return $this->belongsToMany(Employee::class, 'asset_members');
    }

    public function admin()
    {
        return $this->belongsTo(AssetAdmin::class, 'id', 'asset_id');
    }
}
