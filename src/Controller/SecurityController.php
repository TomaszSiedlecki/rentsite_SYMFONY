<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\HttpFoundation\RedirectResponse;

class SecurityController extends AbstractController
{
    /**
     * @Route("/login", name="login")
     */

    //checking is logged
    public function login(Request $request, AuthenticationUtils $utils)
    {
      if ($this->container->get('security.authorization_checker')->isGranted('ROLE_USER'))
      {
          return new RedirectResponse('/');
      }
      $error = $utils->getLastAuthenticationError();
      $lastUsername = $utils->getLastUsername();
      return $this->render('security/login.html.twig', [
          'error' => $error,
          'username' => $lastUsername
      ]);
    }

    /**
     * @Route("/logout", name="logout")
    */
    public function logout(){}
}
