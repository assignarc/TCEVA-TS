<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/')]
class HomeController extends BaseController
{


    #[Route('/', name: 'app_Home', methods: ['GET','POST'])]
    public function index(): Response
    {
        return $this->render('home.html.twig', [
        ]);
    }  
}
