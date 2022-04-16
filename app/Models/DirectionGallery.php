<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DirectionGallery extends Model
{
    use HasFactory;

    protected $table = 'direction_gallery';

    protected $fillable = [
        'direction_id',
        'slika'
    ];

    public function direction()
    {
        return $this->belongsTo(Direction::class);
    }
}
