<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     */

    public function index(): Response
    {
         $Annonces = $this->getDoctrine()
                ->getManager()
                ->createQuery("SELECT m.nom FROM App\Entity\Marque m")
                ->getResult();

        return $this->render('home/index.html.twig', [
            'Annonces' => $Annonces
        ]);

    }

}