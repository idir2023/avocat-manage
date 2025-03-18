<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parametre extends Model
{
    use HasFactory;

    // Define the table name (if different from the default 'parametres')
    protected $table = 'parametres';

    // Define the fillable fields
    protected $fillable = [
        'nom', 
        'prenom', 
        'localisation', 
        'email', 
        'telephone', 
        'instagram', 
        'linkedin', 
        'facebook', 
        'twitter', 
        'website', 
        'youtube'
    ];

    // Optionally, you can define hidden attributes if you want to exclude them in JSON responses
    // protected $hidden = ['column_name'];
}
