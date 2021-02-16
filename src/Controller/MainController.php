<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ProductRepository;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="")
     */
    public function index(ProductRepository $repos): Response
    {
        $name = $repos->findBy([]);
        return $this->render('main/index.html.twig', [
            'name' => $name,
        ]);
    }
}
