<?php
 
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    // Define the table name (if it's not plural of the model name)
    protected $table = 'settings';

    // Define the fillable fields to allow mass assignment
    protected $fillable = [
        'company_name',
        'logo',
        'email',
        'address',
        'phone_number',
        'website',
        'social_media',
    ];

    // Specify the attributes that should be cast to native types (e.g., JSON or Date)
    protected $casts = [
        'social_media' => 'array', // Automatically casts 'social_media' as an array
    ];
}
