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
    
        return $this->render('gallary/index.html.twig', [
            'voitures' => $voiture,
        ]);
    }
}
