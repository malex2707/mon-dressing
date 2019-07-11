<?php

namespace App\Controller;

use App\Entity\Couleur;
use App\Entity\Saison;
use App\Entity\Type;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function index()
    {
        $types=$this->getDoctrine()->getRepository(Type::class)->findAll();
        $couleurs=$this->getDoctrine()->getRepository(Couleur::class)->findAll();
        $saisons=$this->getDoctrine()->getRepository(Saison::class)->findAll();

        return $this->render('default/index.html.twig', [
            'types' => $types,
            'couleurs' => $couleurs,
            'saisons' => $saisons,
        ]);
    }

    /**
     * @Route("/blog", name="blog")
     */
    public function blog()
    {
        return $this->render('default/blog.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }
}
