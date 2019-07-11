<?php

namespace App\Controller;

use App\Entity\Vetement;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class VetementController extends AbstractController
{
    /**
     * @Route("/vetement/search", name="vetement_search")
     */
    public function search(Request $request)
    {
        $typeTo = $request->query->get("type-to");
        $couleur = $request->query->get("couleur");

        $vetements = $this->getDoctrine()->getRepository(Vetement::class)->findSearch($typeTo, $couleur);


        return $this->render('vetement/search.html.twig', [
            'vetements' => $vetements,
        ]);
    }
}
