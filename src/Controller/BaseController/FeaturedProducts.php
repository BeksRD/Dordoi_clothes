<?php

namespace App\Controller\BaseController;

use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class FeaturedProducts extends AbstractController
{
    public function show(ManagerRegistry $managerRegistry):Response{
        $result = $managerRegistry->getRepository(\App\Entity\Clothes::class)->findAll();
        return $this->render('base/featured_products.html.twig',['products'=>$result]);
    }

}