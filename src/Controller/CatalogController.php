<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CatalogController extends AbstractController
{
    #[Route('/catalog', name:'catalog')]
    public function index(): Response
    {
        return $this->render('catalog/catalog.html.twig', [
            'title' => 'Catalog',
        ]);
    }
}