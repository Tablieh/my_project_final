<?php

namespace App\Controller;

use App\Entity\Marque;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     */

    public function index(): Response
    {
        $Annonces = $this->getDoctrine()
            ->getRepository(Marque::class)
            ->findBy([], ["nom" => "ASC"],10);
        /* $Annonces = $this->getDoctrine()
                ->getManager()
                ->createQuery("SELECT m.nom FROM App\Entity\Marque m")
                ->getResult();
        */
        return $this->render('home/index.html.twig', [
            'Annonces' => $Annonces
        ]);

    }

}