<?php

namespace App\Controller;

use App\Entity\DonationEntity;
use App\Form\DonationFormType;
use Maviance\S3PApiClient\ApiClient;
use Maviance\S3PApiClient\ApiException;
use Maviance\S3PApiClient\Configuration;
use Maviance\S3PApiClient\Service\AccountApi;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelpAfterStrokeDonateController extends AbstractController
{
    #[Route('/donate', name: 'help_after_stroke_donate')]
    public function index(): Response
    {

        $url = $_ENV['MAVIANCE_URL'];
        $token = $_ENV['MAVIANCE_PUBLIC_KEY'];
        $secret = $_ENV['MAVIANCE_SECRET_KEY'];
        $xApiVersion = "3.0.0";

        $config = new Configuration();
        $config->setHost($url);
        $client = new ApiClient($token, $secret, ['verify' => false]);

        $donation = new DonationEntity();
        $form = $this->createForm(DonationFormType::class, $donation);

        return $this->render('help_after_stroke_donate/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
