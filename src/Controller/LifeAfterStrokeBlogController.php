<?php

namespace App\Controller;

use App\Entity\Post;
use App\Repository\PostRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LifeAfterStrokeBlogController extends AbstractController
{
    #[Route('/life-after-stroke-blog', name: 'life_after_stroke_blog')]
    public function index(PostRepository $repository): Response
    {
        return $this->render('life_after_stroke_blog/index.html.twig', [
            'posts' => $repository->findAll(),
        ]);
    }

    #[Route('/life-after-stroke-blog/{slug}', name: 'single_post')]
    public function single(Post $post): Response
    {
        return $this->render('life_after_stroke_blog/single.html.twig', [
            'post' => $post,
        ]);
    }
}
