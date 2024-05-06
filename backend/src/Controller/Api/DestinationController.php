<?php

namespace App\Controller\Api;

use App\Entity\Destination;
use App\Repository\DestinationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/api/destination', name: 'api_destination')]
class DestinationController extends AbstractController
{
    #[Route('s', name: 'index')]
    public function index(DestinationRepository $destinationRepository): Response
    {
        $destination = $destinationRepository->findAll();

        return $this->json(data: $destination, context: ["groups" =>["app_destination_index"]]);
    }
}
