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
            'description' => ' 
            On accompagne les clients dans la gestion et l’optimisation de leurs obligations fiscales.

On assiste les clients lors de contrôles ou de contentieux avec l’administration fiscale,défendant ainsi leurs intérêts devnat les juridictions compétentes 

On propose des conseils stratégiques pour sécuriser les opérations et anticiper les risques fiscaux.

On garantit la conformité en recherchant des solutions adaptées à chaque situation.',
            'price' => 500,
        ]);

        Pack::create([
            'name' => 'Consultation Spécialisée',
            'slug' => 'Visas & Recours ',
            'description' => 'Assistance pour les démarches de visa, recours administratifs ,  etc.',
            'price' => 1500,
        ]);
        Pack::create([
            'name' => 'Consultation Avancée',
            'slug' => 'consultation-avancee',
            'description' => 
                "Droit Fiscal : Problèmes d’impôts, régularisations fiscales... \n".
                "Droit Foncier : Litiges immobiliers, titres fonciers...\n" .
                "Droit Commercial : Contrats commerciaux, litiges entre entreprises...",
            'price' => 1500,
        ]);
        

   
    }
}
