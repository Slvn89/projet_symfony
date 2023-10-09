<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProduitController extends AbstractController
{
    #[Route('/produit', name: 'app_produit')]
    public function index(): Response
    {
        return $this->render('produit/index.html.twig', [
            'controller_name' => 'ProduitController',
        ]);
    }
#[Route('/produit/afficheProduits', name:'afficheProduit')]
public function afficherProduit(){
    $prenom = "pierre"; $nom = "dupont";
    return $this->render('produit/afficheProduits.html.twig',
    [
        "lastname"=>$prenom,
        "firstname" =>$nom
    ]
    );
    
}

}
