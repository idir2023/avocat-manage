<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Actualite extends Model
{
    use HasFactory;

    protected $table = 'actualites'; // Nom de la table si différent du nom par défaut

    protected $fillable = [
        'nom',
        'logo',
        'description',
    ];

}
