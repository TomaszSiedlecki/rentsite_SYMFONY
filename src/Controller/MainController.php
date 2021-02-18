<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;

use Doctrine\ORM\EntityManagerInterface;

use App\Repository\ProductRepository;
use App\Repository\StockRepository;
use App\Repository\CategoryRepository;

use App\Entity\Product;

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
    public function showCriteria(Request $request, ProductRepository $repos, StockRepository $srepos, CategoryRepository $crepos)
    {
      $stock = $request->request->get('s_name');
      $category = $request->request->get('c_name');
      $availability = $request->request->get('av');

      $stockid = $srepos->findBy(array('name'=> $stock));
      $categoryid = $crepos->findBy(array('name'=> $category));

      $product = $repos->findBy(array('category' =>$categoryid, 'stock' => $stockid, 'state' => $availability));
      if($product)
      {
        return $this->render('main/search.html.twig', [
            'av' => $availability,
            'stocks' => $stock,
            'category' => $category,
            'products' => $product,
        ]);
      }
      else
      {
          return $this->redirectToRoute('',['error' => 'nodata']);
      }

    }
    /**
     * @Route("/rent", name="rent")
    */
    public function rentProduct(Request $request, ProductRepository $repo, UserInterface $user)
    {
      $id = $request->request->get('rent'); //product id
      $em = $this->getDoctrine()->getManager();
      $product = $em->getRepository(Product::class)->findOneBy(['id' => $id]);
      $product->setState(0);
      $product->setUid($user);
      $em->flush();
      return $this->redirectToRoute('login');

    }
}
