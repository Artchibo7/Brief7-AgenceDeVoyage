<?php

namespace App\Controller\Api;

use App\Repository\CategorieRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
#[Route('/api/categorie', name: 'api_categorie')]
class CategorieController extends AbstractController
{
    #[Route('s', name: 'index')]
    public function index(CategorieRepository $categorieRepository): Response
    {
        $categorie = $categorieRepository->findAll();
        return $this->json(data: $categorie, context: ["groups" =>["app_categorie_index"]]);
    }
}
