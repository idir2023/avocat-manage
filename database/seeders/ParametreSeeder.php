<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
 use Illuminate\Support\Facades\DB;

class ParametreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('parametres')->insert([
            'nom' => 'John',
            'prenom' => 'Doe',
            'localisation' => 'New York, USA',
            'email' => 'johndoe@example.com',
            'telephone' => '+1234567890',
            'instagram' => '@johndoe',
            'linkedin' => 'https://linkedin.com/in/johndoe',
            'facebook' => 'https://facebook.com/johndoe',
            'twitter' => '@johndoe',
            'website' => 'https://johndoe.com',
            'youtube' => 'https://youtube.com/johndoe',
        ]);
    }
}
