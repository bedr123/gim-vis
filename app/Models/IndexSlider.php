<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IndexSlider extends Model
{
    use HasFactory;

    protected $table = 'index_slider';

    protected $fillable = [
        'naslov',
        'opis',
        'slika',
        'redoslijed',
        'link',
        'thumb'
    ];
}
