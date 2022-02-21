<?php

namespace App\Controller;

use App\Entity\ClothesSlider;
use Doctrine\Persistence\ManagerRegistry;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FrontController extends AbstractController
{
    #[Route('/home')]
    public function HomePage(ManagerRegistry $doctrine): Response
    {
        return $this->render('front/homepage.html.twig');
    }
}
