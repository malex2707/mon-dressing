<?php

namespace App\DataFixtures;

use App\Entity\Marque;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class MarqueFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $nike = new Marque();
        $nike->setNom("Nike");
        $manager->persist($nike);
        $this->addReference("marque-nike", $nike);

        $fila = new Marque();
        $fila->setNom("Fila");
        $manager->persist($fila);
        $this->addReference("marque-fila", $fila);

        $zara = new Marque();
        $zara->setNom("Zara");
        $manager->persist($zara);
        $this->addReference("marque-zara", $zara);

        $newlook = new Marque();
        $newlook->setNom("Newlook");
        $manager->persist($newlook);
        $this->addReference("marque-newlook", $newlook);

        $mango = new Marque();
        $mango->setNom("Mango");
        $manager->persist($mango);
        $this->addReference("marque-mango", $mango);

        $springfield = new Marque();
        $springfield ->setNom("Springfield");
        $manager->persist($springfield);
        $this->addReference("marque-springfield", $springfield);



        $bonobo = new Marque();
        $bonobo ->setNom("Bonobo");
        $manager->persist($bonobo);
        $this->addReference("marque-bonobo", $bonobo);

        $adidas = new Marque();
        $adidas ->setNom("Adidas");
        $manager->persist($bonobo);
        $this->addReference("marque-adidas", $adidas);

        $pimkie = new Marque();
        $pimkie ->setNom("Pimkie");
        $manager->persist($pimkie);
        $this->addReference("marque-pimkie", $pimkie);


        $manager->flush();
    }
}
