<?php

namespace App\Controller;

use App\Entity\Marque;
use App\Form\AjouteMarque;
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
     * @Route("/", name="activitys_index")
     */
    public function index()
    {
        $marque = $this->getDoctrine()
                ->getRepository(Marque::class)
                ->findAll();
    
        return $this->render('activity/index.html.twig', [
            'marque' => $marque,

        ]);
    }

    /**
     * @Route("/addMarque", name="Marque_add")
     * @Route("/{id}/editmodule", name="module_edit")
     */
    public function add_edit_Marque(Marque $Marque = null, Request $request){
        // si le Marque n'existe pas, on instancie un nouveau Marque(on est dans le cas d'un ajout) 
        if(!$Marque){
            $Marque = new Marque();
        }
        //il faut créer un Marque au préalable (php bin/console make:form)
        $form = $this->createForm(AjouteMarque::class, $Marque );

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
            return $this->redirectToRoute("activitys");

        }
        return $this->render('activity/add_edit_Marque.html.twig', [
            'AjouteMarque' => $form->createView(),
            'editMode'=> $Marque->getId() !== null
        ]);
    }
    /**
     * @Route("/marque/{id}", name="marque_show", methods="GET")
     */
    public function showMarque(Marque $marque): Response {
        return $this->render('activity/showCentre.html.twig', [
            'marque' => $marque
        ]);
    }
}
