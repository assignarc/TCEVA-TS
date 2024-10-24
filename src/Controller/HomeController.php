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
