<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TeamController extends AbstractController
{
    #[Route('/team', name: 'team')]
    public function index(UserRepository $repository): Response
    {
        $users = $repository->findAll();
        return $this->render('team/index.html.twig', [
            'team' => $users,
        ]);
    }

    #[Route('/profile/{slug}', name: 'user_profile')]
    public function userProfile(User $user): Response
    {

        return $this->render('team/profile.html.twig', [
            'member' => $user
        ]);
    }
}
