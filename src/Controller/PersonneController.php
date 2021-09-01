<?php

namespace App\Controller;

use App\Entity\Equipe;
use App\Entity\Personne;
use App\Repository\EquipeRepository;
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
    public function ajouter(Request $request, EntityManagerInterface $em, EquipeRepository $equipeRepo): Response
    {
        
        $nom = $request->request->get('personne_nom');
        $prenom = $request->request->get('personne_prenom');
        $equipes_tab = $request->request->get('personne_equipes');


        if($prenom && $nom){
            $personne = new Personne; 
            $personne->setNom($nom); 
            $personne->setPrenom($prenom); 

            if($equipes_tab){
                foreach ((array) $equipes_tab as $equipe_id) {
                    $equipe = $equipeRepo->findOneBy(['id'=>$equipe_id]);
                    $personne->addEquipe($equipe); 
                }
            }
        
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
