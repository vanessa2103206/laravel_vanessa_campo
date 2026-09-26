<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    // Consentiamo il salvataggio di tutti i campi compresa l'immagine
    protected $fillable = ['title', 'subtitle', 'body', 'image'];
}
