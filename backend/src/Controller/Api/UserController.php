<?php

namespace App\Controller\Api;

use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/api/user', name: 'api_user_')]
class UserController extends AbstractController
{
    #[Route('s', name: 'index')]
    public function index(UserRepository $userRepository): Response
    {
        $user = $userRepository->findAll(); 
        return $this->json(data: $user, context: ["groups" =>["app_user_index"]]);
    }
}
