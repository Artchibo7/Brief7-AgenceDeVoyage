<?php

namespace App\Controller\Api;

use App\Repository\ReservationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/api/reservation', name: 'api_reservation')]
class ReservationController extends AbstractController
{
    #[Route('s', name: 'index')]
    public function index(ReservationRepository $reservationRepository): Response
    {

    $reservation = $reservationRepository;
        return $this->json(data: $reservation, context: ['groups' =>["app_resevation_index"]]);
    }
}
