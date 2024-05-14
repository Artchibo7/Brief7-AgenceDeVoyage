<?php

namespace App\Controller\Api;

use App\Repository\ContactRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/api/contact', name: 'api_contact_')]
class ContactController extends AbstractController {
    #[Route('s', name: 'index', methods: ['POST'])]
    public function index(ContactRepository $contactRepository): Response {
        $contact = $contactRepository->findAll();
        return $this->json(data: $contact, context: ["groups" =>  "api_contact_index"]);
    }
}
