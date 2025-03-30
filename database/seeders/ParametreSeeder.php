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
            'nom' => 'Bounit',
            'prenom' => 'hanane',
            'localisation' => 'Bureau N°4 , au 2éme étage immeuble lilou -Haut Founty ,Agadir',
            'email' => 'Cabinetbounit.avocat@gmail.com',
            'telephone' => '+212528281710',
            'instagram' => '@johndoe',
            'linkedin' => 'https://linkedin.com/in/johndoe',
            'facebook' => 'https://facebook.com/johndoe',
            'twitter' => '@johndoe',
            'website' => 'https://cabinethbavocats.com/',
            'youtube' => 'https://youtube.com/johndoe',
        ]);
    }
}
