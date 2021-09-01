<?php

namespace App\Controller;


use App\Repository\EquipeRepository;
use App\Repository\PersonneRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AppController extends AbstractController
{
    /**
     * @Route("/", name="app_index", methods={"GET"})
     */
    public function index(PersonneRepository $personneRepository,EquipeRepository $equipeRepository): Response
    {
        return $this->render('app/index.html.twig', [
            'equipes' => $equipeRepository->findAll(),
            'personnes'=> $personneRepository->findAll()
        ]);
    }


}
