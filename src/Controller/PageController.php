<?php

namespace App\Controller;

use App\Exception\InvalidRequestException;
use App\Repository\PersonRepository;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Traits\LoggerAwareTrait;
use App\Traits\DatabaseAwareTrait;
use Exception;

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
