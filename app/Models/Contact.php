<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory; // Import the HasFactory trait

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    // Define the fillable fields
    protected $fillable = [
        'nom',
        'prenom',
        'telephone',
        'email',
         'message',
    ];
}
