<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CashoutController extends AbstractController
{
    #[Route('/cashout', name: 'app_cashout')]
    public function index(): Response
    {
        return $this->render('cashout/index.html.twig', [
            'controller_name' => 'CashoutController',
        ]);
    }
}
