<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/pages')]
class PageController extends BaseController
{


    #[Route('/{page}.html', name: 'app_PageRender', methods: ['GET','POST'])]
    public function index(string $page): Response
    {
        return $this->render("/pages/{$page}.html.twig", [
        ]);
    }  
}
