<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AlainController extends AbstractController
{
    /**
     * @Route("/alain", name="alain")
     */
    public function index(): Response
    {
        return $this->render('alain/index.html.twig', [
            'controller_name' => 'AlainController',
        ]);
    }
    /**
     * @Route("/Allproduits", name="Allproduits")
     */
    public function produits(): Response
    {
        return $this->render('alain/produits.html.twig',
        [
            'controller_name' => 'AlainController',
        ]);
    }
}
