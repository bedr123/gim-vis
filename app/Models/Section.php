<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;

    protected $fillable = ['naziv', 'tip', 'broj_grupa', 'broj_ucenika', 'sedmicni_fond_sati', 'ime_i_prezime_profesora'];
}
