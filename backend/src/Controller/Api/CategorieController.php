<?php

namespace App\Controller\Api;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class CategorieController extends AbstractController
{
    #[Route('/api/categorie', name: 'app_api_categorie')]
    public function index(): Response
    {
        return $this->render('api/categorie/index.html.twig', [
            'controller_name' => 'CategorieController',
        ]);
    }
}
