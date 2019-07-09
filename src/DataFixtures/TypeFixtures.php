<?php

namespace App\DataFixtures;

use App\Entity\Type;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class TypeFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $tshirt = new Type();
        $tshirt->setNom("T-Shirt");
        $manager->persist($tshirt);
        $this->addReference("type-tshirt", $tshirt);

        $short = new Type();
        $short->setNom("Short");
        $manager->persist($short);
        $this->addReference("type-short", $short);

        $combishort = new Type();
        $combishort->setNom("combiShort");
        $manager->persist($combishort);
        $this->addReference("type-combishort", $combishort);

        $robe = new Type();
        $robe->setNom("robe");
        $manager->persist($robe);
        $this->addReference("type-robe", $robe);

        $veste = new Type();
        $veste->setNom("veste");
        $manager->persist($veste);
        $this->addReference("type-veste", $veste);

        $chaussure = new Type();
        $chaussure->setNom("chaussure");
        $manager->persist($chaussure);
        $this->addReference("type-chaussure", $chaussure);



        $manager->flush();
    }
}
