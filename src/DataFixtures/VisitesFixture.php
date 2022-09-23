<?php

namespace App\DataFixtures;
//pour acceder à factory ?
require_once 'vendor/autoload.php';
// On a besoin d'accéder à l'entity Visite
use App\Entity\Visite;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class VisitesFixture extends Fixture
{
    public function load(ObjectManager $manager): void
    {   // Création du faker qui recoit un objet généré par la fabrique
        // de la classe Faker 
        $faker =  Factory :: create('fr_FR');
        //Génération des 100 enrengistrements
        for ($k = 0 ; $k<100 ;$k++){
            $visite = new Visite ();
            // Placer de setters à chaque objets visite créer
            $visite ->setVille ($faker ->city)
                    ->setPays($faker->country)
                    ->setDatecreation($faker->dateTimeBetween('-10years', 'now'))
                    ->setTempmin($faker->numberBetween(-20,10))
                    ->setTempmax($faker->numberBetween (10, 40))
                    ->setNote($faker->numberBetween (0,20))
                    ->setAvis($faker->sentences (4, true)) ;
            
             // enrengistrement de l'objet
            $manager->persist($visite);
                      
        }
                    
        // $product = new Product();
        // $manager->persist($product);
       
        $manager->flush();
    }
}
