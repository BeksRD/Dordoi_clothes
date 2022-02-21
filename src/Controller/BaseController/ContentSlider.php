<?php

namespace App\Controller\BaseController;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\Persistence\ManagerRegistry;

class ContentSlider extends AbstractController
{
    public function show(ManagerRegistry $manager):Response{
        $result = $manager->getRepository(\App\Entity\ClothesSlider::class)->findAll();
        return $this->render('base/content_slider.html.twig',['slider'=>$result[0]]);
    }

}