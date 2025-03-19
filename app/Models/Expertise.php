<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expertise extends Model
{
    use HasFactory;

    protected $table = 'expertises'; // Nom de la table si différent du nom par défaut

    protected $fillable = [
        'nom',
        'logo',
        'description',
    ];

    // Exemple de relation avec un autre modèle (si applicable)
    // public function users()
    // {
    //     return $this->belongsToMany(User::class);
    // }
}
