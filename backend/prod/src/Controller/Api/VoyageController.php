<?php

namespace App\Controller\Api;

use App\Repository\VoyageRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/api/voyage', name: 'api_voyage_')]
class VoyageController extends AbstractController
{
    #[Route('s', name: 'index', methods: ['GET'])]
    public function index(VoyageRepository $voyageRepository): Response
    {
        $voyages = $voyageRepository->findAll();
        return $this->json( $voyages, context: [ "groups" => "api_voyage_index"]);
    }
}
