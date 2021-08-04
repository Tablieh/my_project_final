<?php

namespace App\Controller;

use App\Entity\Marque;
use App\Entity\Modele;
use App\Entity\Voiture;
use App\Form\MarqueType;
use App\Form\ModeleType;
use App\Form\VoitureType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
/**
 * @Route("/activity")
 */
class ActivityController extends AbstractController
{
    /**
     * @Route("/", name="activity_index")
     */
    public function index()
    {
        $marque = $this->getDoctrine()
                ->getRepository(Marque::class)
                ->findAll();
        $modele = $this->getDoctrine()
                ->getRepository(Modele::class)
                ->findAll();
        $voiture = $this->getDoctrine()
                ->getRepository(Voiture::class)
                ->findAll();
    
        return $this->render('activity/index.html.twig', [
            'marques' => $marque,
            'modeles' => $modele,
            'voitures' => $voiture,
        ]);
    }

    /**
     * @Route("/addMarque", name="Marque_add")
     * @Route("/{id}/editMarque", name="Marque_edit")
     */
    public function add_edit_Marque(Marque $Marque = null, Request $request){
        // si le Marque n'existe pas, on instancie un nouveau Marque(on est dans le cas d'un ajout) 
        if(!$Marque){
            $Marque = new Marque();
        }
        //il faut créer un Marque au préalable (php bin/console make:form)
        $form = $this->createForm(MarqueType::class, $Marque );

        $form->handleRequest($request);
        // si on soumet le formulaire et que le form est validé
        if($form->isSubmitted() && $form->isValid()){
            //on récuprère les données du formulaire
            $Marque = $form->getData();
            //on ajoute le nouveau Marque
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($Marque);
            $entityManager->flush();
            //on redirige vers la liste des Marque (Marque_list etant le nom de la route)
            return $this->redirectToRoute("home");

        }
        return $this->render('activity/add_edit_Marque.html.twig', [
            'MarqueType' => $form->createView(),
            'editMode'=> $Marque->getId() !== null
        ]);
    }
    
    /**
     * @Route("/marque/{id}", name="marque_show", methods="GET")
     */
    /*
    public function showMarque(Marque $marque): Response {
        return $this->render('activity/showMarque.html.twig', [
            'marque' => $marque
        ]);
    }
    */
     /**
     * @Route("/addModele", name="Modele_add")
     * @Route("/{id}/editModele", name="Modele_edit")
     */
    public function add_edit_Modele(Modele $Modele = null, Request $request){
        // si le Marque n'existe pas, on instancie un nouveau Modele(on est dans le cas d'un ajout) 
        if(!$Modele){
            $Modele = new Modele();
        }
        //il faut créer un Modele au préalable (php bin/console make:form)
        $form = $this->createForm(ModeleType::class, $Modele );

        $form->handleRequest($request);
        // si on soumet le formulaire et que le form est validé
        if($form->isSubmitted() && $form->isValid()){
            //on récuprère les données du formulaire
            $Modele = $form->getData();
            //on ajoute le nouveau Modele
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($Modele);
            $entityManager->flush();
            //on redirige vers la liste des Modele (Modele_list etant le nom de la route)
            return $this->redirectToRoute("home");

        }
        return $this->render('activity/add_edit_Modele.html.twig', [
            'ModeleType' => $form->createView(),
            'editMode'=> $Modele->getId() !== null
        ]);
    }
    /**
     * @Route("/Modele/{id}", name="Modele_show", methods="GET")
     */
    /*
    public function showMarque(Modele $Modele): Response {
        return $this->render('activity/showModele.html.twig', [
            'modele' => $Modele
        ]);
    }
    */
        /**
     * @Route("/addVoiture", name="Voiture_add")
     * @Route("/{id}/editVoiture", name="Voiture_edit")
     */
    public function add_edit_Voiture(Voiture $Voiture = null, Request $request){
        // si le Voiture n'existe pas, on instancie un nouveau Voiture(on est dans le cas d'un ajout) 
        if(!$Voiture){
            $Voiture = new Voiture();
        }
        //il faut créer un Voiture au préalable (php bin/console make:form)
        $form = $this->createForm(VoitureType::class, $Voiture );

        $form->handleRequest($request);
        // si on soumet le formulaire et que le form est validé
        if($form->isSubmitted() && $form->isValid()){
            //on récuprère les données du formulaire
            $Voiture = $form->getData();
            //on ajoute le nouveau Voiture
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($Voiture);
            $entityManager->flush();
            //on redirige vers la liste des Voiture (Voiture_list etant le nom de la route)
            return $this->redirectToRoute("home");

        }
        return $this->render('activity/add_edit_Voiture.html.twig', [
            'VoitureType' => $form->createView(),
            'editMode'=> $Voiture->getId() !== null
        ]);
    }
    /**
     * @Route("/Voiture/{id}", name="Voiture_show", methods="GET")
     */
    public function showVoiture(Voiture $Voiture): Response {
        return $this->render('activity/showVoiture.html.twig', [
            'voiture' => $Voiture
        ]);
    }
}
