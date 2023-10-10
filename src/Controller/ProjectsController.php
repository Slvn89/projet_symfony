<?php

namespace App\Controller;

use App\Repository\ProjectsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProjectsController extends AbstractController
{
    #[Route('/projects', name: 'app_projects')]
    public function index(): Response
    {
        return $this->render('projects/index.html.twig', [
            'controller_name' => 'ProjectsController',
        ]);
    }

    #[Route('/accueil/index', name: 'afficheProjects')]

    public function afficheservice (ProjectsRepository $ProjectsRepository):Response
    {
        $service = $ProjectsRepository->findAll();
        //dd($prods);
        return $this->render('accueil/index.html.twig',["photo" => $service]);

    }

}
