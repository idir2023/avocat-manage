<?php
 
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pack;

class PackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Insert sample packs into the database
        Pack::create([
            'name' => 'Consultation Générale',
            'slug' => 'Droit du Travail & Droit de la Famille',
            'description' => 'Questions liées aux contrats de travail, licenciements, pensions, divorces, successions, etc.',
            'price' => 500,
        ]);

        Pack::create([
            'name' => 'Consultation Spécialisée',
            'slug' => 'Visas, Recours & Formations',
            'description' => 'Assistance pour les démarches de visa, recours administratifs, formations juridiques, etc.',
            'price' => 1500,
        ]);
        Pack::create([
            'name' => 'Consultation Avancée',
            'slug' => 'consultation-avancee',
            'description' => 
                "Droit Fiscal : Problèmes d’impôts, régularisations fiscales, contentieux fiscaux.\n" .
                "Droit Foncier : Litiges immobiliers, titres fonciers, bornage, expropriation.\n" .
                "Droit Commercial : Contrats commerciaux, litiges entre entreprises, recouvrement de créances.",
            'price' => 1500,
        ]);
        

   
    }
}
