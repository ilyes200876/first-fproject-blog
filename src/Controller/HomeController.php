<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home', methods: 'GET')]
    public function index(): Response
    {
        $note = 'Welcome dear future users';
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
          'message' => $note,
        ]);
    }
}
