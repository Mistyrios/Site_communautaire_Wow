<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WowFrontController extends AbstractController
{
    #[Route('/front', name: 'a_s_front')]
    public function index(): Response
    {
        return $this->render('wow/index.html.twig', [
            'controller_name' => 'WowFrontController',
        ]);
    }

    #[Route('/', name: 'home')]
    public function home(): Response
    {
        return $this->render('wow/home.html.twig');
    }
}
