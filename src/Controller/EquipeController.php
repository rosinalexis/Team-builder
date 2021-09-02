<?php

namespace App\Controller;

use App\Entity\Equipe;
use App\Form\EquipeType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EquipeController extends AbstractController
{
       /**
     * @Route("/equipe/ajouter", name="app_equipe_ajouter", methods={"GET","POST"})
     */
    public function ajouter(Request $request, EntityManagerInterface $em): Response
    {
        $nom =$request->request->get('epuipe_nom');
        $equipe = new Equipe();
        if ($nom){
            $equipe->setNom($nom);
            $em->persist($equipe);
            $em->flush();
        }
        return $this->redirectToRoute('app_index');    
    }

    /**
     * @Route("/equipe/modification/{id}", name="app_equipe_modification", methods={"GET","POST"})
     */
    public function modification(Request $request, Equipe $equipe): Response
    {
        $form = $this->createForm(EquipeType::class, $equipe);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('app_index');
        }

        return $this->renderForm('equipe/modification.html.twig', [
            'equipe' => $equipe,
            'form' => $form,
        ]);
    }

    /**
     * @Route("equipe/suppression/{id}", name="app_equipe_suppression", methods={"GET"})
     */
    public function suppression(Equipe $equipe, EntityManagerInterface $em): Response
    {
            $em->remove($equipe);
            $em->flush();
        return $this->redirectToRoute('app_index');
    }
}
