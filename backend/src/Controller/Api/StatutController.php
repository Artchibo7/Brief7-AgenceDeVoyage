<?php

namespace App\Controller\Api;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class StatutController extends AbstractController
{
    #[Route('/api/statut', name: 'app_api_statut')]
    public function index(): Response
    {
        return $this->render('api/statut/index.html.twig', [
            'controller_name' => 'StatutController',
        ]);
    }
}
