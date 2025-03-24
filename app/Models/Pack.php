<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pack extends Model
{
    // Define the table name if it's not the plural form of the class name
    protected $table = 'packs'; 

    // Add any fillable fields or guarded attributes if needed
    protected $fillable = ['name', 'description', 'price'];

    /**
     * Get the consultations associated with the pack.
     */
    public function consultations()
    {
        return $this->hasMany(Consultation::class);
    }
}
