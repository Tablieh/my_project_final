<?php

namespace App\Controller;

use App\Entity\Voiture;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class GallaryController extends AbstractController
{
    /**
     * @Route("/gallary", name="gallary")
     */
    public function index(): Response
    {
        $voiture = $this->getDoctrine()
                ->getRepository(Voiture::class)
                ->findAll();
        $resultat = $this->getDoctrine()
                ->getRepository(Voiture::class)
                ->findBy([], ["modele" => "ASC"]
                    );
        return $this->render('gallary/index.html.twig', [
            'voitures' => $voiture,
            'resultat' => $resultat,
        ]);
    }
    /**
     * @Route("/Voiture/{id}", name="Voiture_show", methods="GET")
     */
    public function showVoiture(Voiture $resultat): Response {
        return $this->render('gallary/showVoiture.html.twig', [
            'resultat' => $resultat
        ]);
    }
    /**
     * @Route("/del/{id}", name="Voiture_del")
     */
    public function del_edit(Voiture $Voiture)
    {

        $entityManager = $this->getDoctrine()->getManager();


        $entityManager->remove($Voiture);
        $entityManager->flush();

        return $this->redirectToRoute('gallary');
    }
}
