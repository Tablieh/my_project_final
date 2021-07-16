<?php

namespace App\Controller;

use App\Entity\Avis;
use App\Form\AvisType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    /**
     * @Route("/avis")
     */
class AvisController extends AbstractController
{
    /**
     * @Route("/", name="avis_index")
     */
    public function index()
    {
        $avis = $this->getDoctrine()
                ->getRepository(Avis::class)
                ->findAll();
    
        return $this->render('avis/index.html.twig', [
            'avis' => $avis,

        ]);
    }

    /**
     * @Route("/addAvis", name="Avis_add")
     * @Route("/{id}/editAvis", name="Avis_edit")
     */
    public function add_edit_Avis(Avis $Avis = null, Request $request){
        // si le Avis n'existe pas, on instancie un nouveau Avis(on est dans le cas d'un ajout) 
        if(!$Avis){
            $Avis = new Avis();
        }
        //il faut créer un Avis au préalable (php bin/console make:form)
        $form = $this->createForm(AvisType::class, $Avis );

        $form->handleRequest($request);
        // si on soumet le formulaire et que le form est validé
        if($form->isSubmitted() && $form->isValid()){
            //on récuprère les données du formulaire
            $Avis = $form->getData();
            //on ajoute le nouveau Avis
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($Avis);
            $entityManager->flush();
            //on redirige vers la liste des Avis (Marque_list etant le nom de la route)
            return $this->redirectToRoute("home");

        }
        return $this->render('avis/add_edit_Avis.html.twig', [
            'AvisType' => $form->createView(),
            'editMode'=> $Avis->getId() !== null
        ]);
    }
    
    /**
     * @Route("/avis/{id}", name="avis_show", methods="GET")
     */
    
    public function showAvis(Avis $avis): Response {
        return $this->render('avis/showAvis.html.twig', [
            'avis' => $avis
        ]);
    }
    
}
