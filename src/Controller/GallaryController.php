<?php

namespace App\Controller;

use App\Entity\Voiture;
use App\Form\VoitureType;
use Symfony\Component\HttpFoundation\Request;
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
        $this->addFlash('error', 'the car is well deleted !');
        return $this->redirectToRoute('gallary');
    }
    /**
     * @Route("/{id}/editVoiture", name="Voiture_edit")
     */
    public function add_edit_Voiture(Voiture $Voiture = null, Request $request){
        //il faut créer un Voiture au préalable (php bin/console make:form)
        $form = $this->createForm(VoitureType::class, $Voiture );

        $form->handleRequest($request);
        // si on soumet le formulaire et que le form est validé
        if($form->isSubmitted() && $form->isValid()){
            //on récuprère les données du formulaire
            $Voiture = $form->getData();
            //on ajoute le nouveau Voiture
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->flush();
            $this->addFlash('success', 'the car is well edit !');
            //on redirige vers la liste des Voiture (Voiture_list etant le nom de la route)
            return $this->redirectToRoute("gallary");

        }
        return $this->render('gallary/edit_Voiture.html.twig', [
            'VoitureType' => $form->createView(),
            'editMode'=> $Voiture->getId() !== null
        ]);
    }
}
