<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SecurityController extends AbstractController
{
    #[Route('/connexion', name: 'security.login', methods: ['GET','POST'])]
    public function login(): Response
    {
        return $this->render('login.html.twig', [
            'controller_name' => 'SecurityController',
        ]);
        return $this->redirectToRoute('admin');
    }

    #[Route('/deconnexion', 'security.logout')]
    public function logout()
    {
        //nothing to do here
    }
}
