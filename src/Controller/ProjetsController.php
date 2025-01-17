<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProjetsController extends AbstractController {
    #[Route('/mesprojets', name:'projets')]
    public function index():Response{
        return $this->render("PageSite/projets.html.twig");
    }
}