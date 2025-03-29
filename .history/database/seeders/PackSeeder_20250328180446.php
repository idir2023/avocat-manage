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

On propose des conseils stratégiques pour sécuriser les opérations et anticiper les risques fiscaux.

On garantit la conformité en recherchant des solutions adaptées à chaque situation.',
            'price' => 500,
        ]);
        Pack::create([
            'name' => 'Consultation Spécialisée',
            'slug' => 'Visas & Recours',
            'description' => "Nous vous accompagnons dans toutes vos démarches administratives relatives à l’obtention de visas (études, tourisme, regroupement familial, etc.).\n
        Nous assurons également un suivi rigoureux des dossiers en cas de refus ou de demande de complément, et vous assistons dans la rédaction de recours adaptés à chaque situation.\n
        Nos conseils vous permettent de mieux comprendre les exigences consulaires et d’optimiser vos chances de réussite.",
            'price' => 1500,
        ]);
        Pack::create([
            'name' => 'Consultation Avancée',
            'slug' => 'consultation-avancee',
            'description' => "Ce pack s’adresse aux clients ayant des problématiques juridiques complexes nécessitant une expertise approfondie :\n
        • Droit Fiscal : Optimisation fiscale, contentieux fiscaux, régularisation, contrôle et défense devant les administrations compétentes.\n
        • Droit Foncier : Litiges relatifs à la propriété, aux titres fonciers, aux conflits de voisinage ou d'héritage foncier.\n
        • Droit Commercial : Accompagnement dans la rédaction et l’analyse de contrats commerciaux, règlement de litiges entre entreprises, procédures collectives.\n
        Un accompagnement personnalisé et stratégique est assuré pour chaque domaine abordé.",
            'price' => 1500,
        ]);
        
        

        Pack::create([
       
        

   
    }
}
