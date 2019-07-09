<?php

namespace App\DataFixtures;

use App\Entity\Vetement;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class VetementFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $tshirtNike = new Vetement();
        $tshirtNike->setNom("T-Shirt Nike");
        $tshirtNike->setMarque($this->getReference("marque-nike"));
        $tshirtNike->setImage("tshirt-nike.jpg");
        $tshirtNike->setType($this->getReference("type-tshirt"));
        $tshirtNike->setUrl("http://www.nike.com");
        $tshirtNike->addCouleur($this->getReference("couleur-rouge"));
        $tshirtNike->addCouleur($this->getReference("couleur-blanc"));
        $tshirtNike->addSaison($this->getReference("saison-ete"));
        $manager->persist($tshirtNike);

        $tshirtZara = new Vetement();
        $tshirtZara->setNom("T-Shirt Zara");
        $tshirtZara->setMarque($this->getReference("marque-zara"));
        $tshirtZara->setImage("tshirt-zara.jpg");
        $tshirtZara->setType($this->getReference("type-tshirt"));
        $tshirtZara->setUrl("http://www.zara.com");
        $tshirtZara->addCouleur($this->getReference("couleur-blanc"));
        $tshirtZara->addSaison($this->getReference("saison-ete"));
        $manager->persist($tshirtZara);

        $tshirtMango = new Vetement();
        $tshirtMango->setNom("T-Shirt Mango");
        $tshirtMango->setMarque($this->getReference("marque-mango"));
        $tshirtMango->setImage("tshirt-mango.jpg");
        $tshirtMango->setType($this->getReference("type-tshirt"));
        $tshirtMango->setUrl("http://www.mango.com");
        $tshirtMango->addCouleur($this->getReference("couleur-bleu"));
        $manager->persist($tshirtMango);


        $tshirtPimkie = new Vetement();
        $tshirtPimkie->setNom("T-Shirt Pimkie");
        $tshirtPimkie->setMarque($this->getReference("marque-pimkie"));
        $tshirtPimkie->setImage("tshirt-mango.jpg");
        $tshirtPimkie->setType($this->getReference("type-tshirt"));
        $tshirtPimkie->setUrl("http://www.mango.com");
        $tshirtPimkie->addCouleur($this->getReference("couleur-vert"));
        $manager->persist($tshirtPimkie);


        $vesteFila = new Vetement();
        $vesteFila->setNom("Veste Fila");
        $vesteFila->setMarque($this->getReference("marque-fila"));
        $vesteFila->setImage("tshirt-mango.jpg");
        $vesteFila->setType($this->getReference("type-veste"));
        $vesteFila->setUrl("http://www.fila.com");
        $vesteFila->addCouleur($this->getReference("couleur-orange"));
        $manager->persist($vesteFila);

        $vestePimkie = new Vetement();
        $vestePimkie->setNom("Veste Pimkie");
        $vestePimkie->setMarque($this->getReference("marque-pimkie"));
        $vestePimkie->setImage("tshirt-mango.jpg");
        $vestePimkie->setType($this->getReference("type-veste"));
        $vestePimkie->setUrl("http://www.pimkie.com");
        $vestePimkie->addCouleur($this->getReference("couleur-orange"));
        $manager->persist($vestePimkie);

        $shortBonobo = new Vetement();
        $shortBonobo->setNom("Short Bonobo");
        $shortBonobo->setMarque($this->getReference("marque-bonobo"));
        $shortBonobo->setImage("tshirt-mango.jpg");
        $shortBonobo->setType($this->getReference("type-short"));
        $shortBonobo->setUrl("http://www.bonobo.com");
        $shortBonobo->addCouleur($this->getReference("couleur-marron"));
        $manager->persist($shortBonobo);

        $shortZara = new Vetement();
        $shortZara->setNom("Short Zara");
        $shortZara->setMarque($this->getReference("marque-zara"));
        $shortZara->setImage("tshirt-mango.jpg");
        $shortZara->setType($this->getReference("type-short"));
        $shortZara->setUrl("http://www.zara.com");
        $shortZara->addCouleur($this->getReference("couleur-jaune"));
        $manager->persist($shortZara);

        $combishortZara = new Vetement();
        $combishortZara->setNom("combiShort Zara");
        $combishortZara->setMarque($this->getReference("marque-zara"));
        $combishortZara->setImage("tshirt-mango.jpg");
        $combishortZara->setType($this->getReference("type-combishort"));
        $combishortZara->setUrl("http://www.zara.com");
        $combishortZara->addCouleur($this->getReference("couleur-rouge"));
        $manager->persist($combishortZara);

        $robeSpringfield = new Vetement();
        $robeSpringfield->setNom("Robe Springfield");
        $robeSpringfield->setMarque($this->getReference("marque-springfield"));
        $robeSpringfield->setImage("tshirt-mango.jpg");
        $robeSpringfield->setType($this->getReference("type-robe"));
        $robeSpringfield->setUrl("http://www.springfield.com");
        $robeSpringfield->addCouleur($this->getReference("couleur-rose"));
        $manager->persist($robeSpringfield);

        $chaussureAdidas = new Vetement();
        $chaussureAdidas->setNom("Chaussure Adidas");
        $chaussureAdidas->setMarque($this->getReference("marque-adidas"));
        $robeSpringfield->setImage("tshirt-mango.jpg");
        $robeSpringfield->setType($this->getReference("type-robe"));
        $robeSpringfield->setUrl("http://www.springfield.com");
        $robeSpringfield->addCouleur($this->getReference("couleur-rose"));
        $manager->persist($robeSpringfield);

        $chaussurePimkie = new Vetement();
        $chaussurePimkie->setNom("Chaussure Pimkie");
        $chaussurePimkie->setMarque($this->getReference("marque-pimkie"));
        $chaussurePimkie->setImage("tshirt-mango.jpg");
        $chaussurePimkie->setType($this->getReference("type-chaussure"));
        $chaussurePimkie->setUrl("http://www.pimkie.com");
        $chaussurePimkie->addCouleur($this->getReference("couleur-vert"));
        $manager->persist($chaussurePimkie);





        $manager->flush();
    }

    /**
     * This method must return an array of fixtures classes
     * on which the implementing class depends on
     *
     * @return array
     */
    public function getDependencies()
    {
        return [
            MarqueFixtures::class,
            CouleurFixtures::class,
            TypeFixtures::class,
            SaisonFixtures::class
        ];
    }
}
