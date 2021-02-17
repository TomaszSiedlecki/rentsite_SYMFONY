<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ProductRepository;
use App\Repository\StockRepository;
use App\Repository\CategoryRepository;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="")
     */
    public function index(ProductRepository $repos, StockRepository $srepos, CategoryRepository $crepos): Response
    {
        $product = $repos->findBy([]);
        $stock = $srepos->findBy([]);
        $category = $crepos->findBy([]);
        return $this->render('main/index.html.twig', [
            'products' => $product,
            'stocks' => $stock,
            'category' => $category,
        ]);
    }
    /**
     * @Route("/search", name="search")
    */
    public function showCriteria(Request $request,ProductRepository $repos)
    {
      $product = $repos->findBy([]);
      $stock = $request->request->get('s_name');
      $category = $request->request->get('c_name');
      $availability = $request->request->get('av');
      return $this->render('main/search.html.twig', [
          'av' => $availability,
          'stocks' => $stock,
          'category' => $category,
          'products' => $product,
      ]);
    }
}
