<?php

namespace App\Controller;

use App\Entity\Personne;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PersonneController extends AbstractController
{
    /**
     * @Route("/personne/ajouter", name="app_personne_ajouter", methods={"POST"})
     */
    public function ajouter(Request $request, EntityManagerInterface $em): Response
    {
        dd($request->request);
        $nom = $request->request->get('personne_nom');
        $prenom = $request->request->get('personne_prenom');

        if($prenom && $nom){
            $personne = new Personne; 
            $personne->setNom($nom); 
            $personne->setPrenom($prenom); 

            $em->persist($personne); 
            $em->flush();
        }
        return $this->redirectToRoute('app_index');
    }

    /**
     * @Route("/personne/supprimer/{id}", name="app_personne_supprimer", methods={"GET"})
     */
    public function supprimer(Personne $personne, EntityManagerInterface $em): Response
    {
            $em->remove($personne); 
            $em->flush();
            
        return $this->redirectToRoute('app_index');
    }
}
