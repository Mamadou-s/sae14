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

     /**
     * @Route("/cv", name="cv")
     */
    public function page2(): Response
    {
        return $this->render('bah/cv.html.twig', [
            'controller_name' => 'BahController',
        ]);
    }
     /**
     * @Route("/loisir", name="loisir")
     */
    public function page3(): Response
    {
        return $this->render('bah/loisir.html.twig', [
            'controller_name' => 'BahController',
        ]);
    }
     /**
     * @Route("/portfolio", name="portfolio")
     */
    public function page4(): Response
    {
        return $this->render('bah/portfolio.html.twig', [
            'controller_name' => 'BahController',
        ]);
    }
     /**
     * @Route("/contact", name="contact")
     */
    public function page5(): Response
    {
        return $this->render('bah/contact.html.twig', [
            'controller_name' => 'BahController',
        ]);
    }
}

