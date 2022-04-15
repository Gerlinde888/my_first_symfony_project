<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Test02Controller extends AbstractController
{
    #[Route('/test02', name: 'app_test02')]
    public function index(): Response
    {
        return $this->render('test02/index.html.twig', [
            'controller_name' => 'Test02Controller',
        ]);
    }
}
