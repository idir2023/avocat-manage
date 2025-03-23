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
            'localisation' => 'Agadir-maroc',
            'email' => 'Cabinetbounit.avocat@gmail.com',
            'telephone' => '0621309024',
            'instagram' => '@johndoe',
            'linkedin' => 'https://linkedin.com/in/johndoe',
            'facebook' => 'https://facebook.com/johndoe',
            'twitter' => '@johndoe',
            'website' => 'https://cabinethbavocats.com/',
            'youtube' => 'https://youtube.com/johndoe',
        ]);
    }
}
