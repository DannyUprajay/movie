<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin')]
class AdminController extends AbstractController
{
    //v2
    #[Route('/', name: 'app_admin')]
    public function index(): Response
    {
        // v2
        if($this->isGranted('ROLE_ADMIN')){
            return $this->render('admin/index.html.twig', [
                'controller_name' => 'AdminController',
            ]);
        }
        return $this->redirectToRoute('app_home');
    }
}
