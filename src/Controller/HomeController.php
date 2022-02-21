<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(): Response {
        return $this->render('home/index.html.twig');
    }

    #[Route('/test', name: 'test')]
    public function test(): Response {
        $this->addFlash("success", "Ca fonctionne correctement !");

        return $this->render('home/test.html.twig', [
            'user' => ["Chloé", "Charlotte", "Didier", "Cassandra", "Gerard"],
            'number' => [43, 8, 35, 8, 75, 41, 55, 75, 39, 20, 15, 1],
            "animals" => [
                1 => "chien",
                2 => "chat",
                3 => "lapin"
            ]
        ]);
    }
}
