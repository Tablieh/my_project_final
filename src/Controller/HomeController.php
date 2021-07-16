<?php

namespace App\Controller;

use App\Entity\Marque;
use App\Entity\Modele;
use App\Entity\Voiture;
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
        $marque = $this->getDoctrine()
                ->getRepository(Marque::class)
                ->findAll();
        $modele = $this->getDoctrine()
                ->getRepository(Modele::class)
                ->findAll();
        $voiture = $this->getDoctrine()
                ->getRepository(Voiture::class)
                ->findAll();
    
        return $this->render('home/index.html.twig', [
            'Annonces' => $Annonces,
            'marques' => $marque,
            'modeles' => $modele,
            'voitures' => $voiture,
        ]);

    }

}