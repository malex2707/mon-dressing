<?php

namespace App\DataFixtures;

use App\Entity\Couleur;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class CouleurFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        /**
         * Création des couleurs
         */
        $rouge = new Couleur();
        $rouge->setNom("Rouge");
        $this->addReference("couleur-rouge", $rouge);

        $vert = new Couleur();
        $vert->setNom("Vert");
        $this->addReference("couleur-vert", $vert);

        $bleu = new Couleur();
        $bleu->setNom("Bleu");
        $this->addReference("couleur-bleu", $bleu);

        $jaune = new Couleur();
        $jaune->setNom("Jaune");
        $this->addReference("couleur-jaune", $jaune);

        $marron = new Couleur();
        $marron->setNom("Marron");
        $this->addReference("couleur-marron", $marron);

        $gris = new Couleur();
        $gris->setNom("Gris");
        $this->addReference("couleur-gris", $gris);

        $orange = new Couleur();
        $orange->setNom("Orange");
        $this->addReference("couleur-orange", $orange);

        $violet = new Couleur();
        $violet->setNom("Violet");
        $this->addReference("couleur-violet", $violet);

        $rose = new Couleur();
        $rose->setNom("Rose");
        $this->addReference("couleur-rose", $rose);

        $blanc = new Couleur();
        $blanc->setNom("Blanc");
        $this->addReference("couleur-blanc", $blanc);

        $noir = new Couleur();
        $noir->setNom("Noir");
        $this->addReference("couleur-noir", $noir);
        /**
         * Associer les couleurs ensemble
         */
        $vert->addCouleur($rouge);

        $vert->addCouleur($bleu);

        $vert->addCouleur($gris);

        $vert->addCouleur($marron);

        $bleu->addCouleur($jaune);

        $bleu->addCouleur($orange);

        $bleu->addCouleur($blanc);

        $bleu->addCouleur($marron);

        $rouge->addCouleur($blanc);

        $rouge->addCouleur($noir);


        /**
         * Enregistrer les couleurs créées
         */
        $manager->persist($rouge);
        $manager->persist($vert);
        $manager->persist($blanc);
        $manager->persist($marron);
        $manager->persist($bleu);
        $manager->persist($jaune);
        $manager->persist($blanc);
        $manager->persist($noir);
        $manager->persist($gris);
        $manager->persist($orange);
        $manager->persist($rose);
        $manager->flush();
    }
}
