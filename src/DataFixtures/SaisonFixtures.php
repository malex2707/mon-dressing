<?php

namespace App\DataFixtures;

use App\Entity\Saison;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class SaisonFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $printemps = new Saison();
        $printemps->setNom("Printemps");
        $manager->persist($printemps);
        $this->addReference("saison-printemps", $printemps);


        $ete = new Saison();
        $ete->setNom("Été");
        $manager->persist($ete);
        $this->addReference("saison-ete", $ete);


        $hiver = new Saison();
        $hiver->setNom("Hiver");
        $manager->persist($hiver);
        $this->addReference("saison-hiver", $hiver);

        $automne = new Saison();
        $automne->setNom("Automne");
        $manager->persist($automne);
        $this->addReference("saison-automne", $automne);

        $manager->flush();
    }
}
