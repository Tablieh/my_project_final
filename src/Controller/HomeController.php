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

        $modeles = $this->getDoctrine()
                ->getRepository(Modele::class)
                ->findBy([], ["modele" => "ASC"]);

        $voiture = $this->getDoctrine()
                ->getRepository(Voiture::class)
                ->findAll();
    
        return $this->render('home/index.html.twig', [
            'Annonces' => $Annonces,
            'marques' => $marque,
            'modeles' => $modeles,
            'voitures' => $voiture,
        ]);

    }
    /**
     * @Route("/home/{id}", name="home_show", methods="GET")
     */
    public function showModeles(Marque $marque): Response {
        return $this->render('home/showModele.html.twig', [
            'modeles' => $marque->getModeles()
        ]);
    }
}