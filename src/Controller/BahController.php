<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BahController extends AbstractController
{
    /**
     * @Route("/bah", name="app_bah")
     */
    public function index(): Response
    {
        return $this->render('bah/index.html.twig', [
            'controller_name' => 'BahController',
        ]);
    }
}
