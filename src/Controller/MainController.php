<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\HttpFoundation\RedirectResponse;

use Doctrine\ORM\EntityManagerInterface;

use App\Repository\ProductRepository;
use App\Repository\StockRepository;
use App\Repository\CategoryRepository;
use App\Entity\Product;
use App\Form\AddProductType;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="")
     */
    public function index(ProductRepository $repos, StockRepository $srepos, CategoryRepository $crepos, UserInterface $user): Response
    {
        $product = $repos->findBy([]);
        $stock = $srepos->findBy([]);
        $category = $crepos->findBy([]);
        return $this->render('main/index.html.twig', [
            'products' => $product,
            'stocks' => $stock,
            'category' => $category,
            'user' => $user
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
    /**
     * @Route("/return", name="return")
    */
    public function returnProduct(Request $request, ProductRepository $repo, UserInterface $user)
    {
      $id = $request->request->get('return'); //product id
      $em = $this->getDoctrine()->getManager();
      $product = $em->getRepository(Product::class)->findOneBy(['id' => $id]);
      $product->setState(1);
      $product->setUid(NULL);
      $em->flush();
      return $this->redirectToRoute('login');
    }
    /**
      * @Route("/admin", name="admin")
    */
    public function adminIndex(Request $request)
    {
      if (!$this->container->get('security.authorization_checker')->isGranted('ROLE_ADMIN'))
      {
          return new RedirectResponse('/');
      }

      $product = new Product();
      $form = $this->createForm(AddProductType::class, $product);
      $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            // $form->getData() holds the submitted values
            // but, the original `$task` variable has also been updated
            $product = $form->getData();
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($product);
            $entityManager->flush();
            return new RedirectResponse('/');
        }
      return $this->render('main/admin.html.twig', [
          'form' => $form->createView(),
]);
    }
}
