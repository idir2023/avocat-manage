<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    use HasFactory;

    protected $table = 'consultations'; // Nom de la table

    protected $fillable = [
        'nom',
        'prenom',
        'email',
        'telephone',
        'probleme',
        'fichier',
        'paiement_status',
        'user_id',
    ];

    // Accesseur pour récupérer le fichier avec le bon chemin (si stocké dans storage/app/public/consultations)
    public function getFichierUrlAttribute()
    {
        return $this->fichier ? asset('storage/' . $this->fichier) : null;
    }
}
