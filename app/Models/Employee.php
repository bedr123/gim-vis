<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'ime_i_prezime',
        'slika',
        'informacije',
        'uloga',
        'opis_posla',
        'kategorija'
    ];

    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }
}
