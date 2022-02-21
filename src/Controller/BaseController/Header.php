<?php

namespace App\Controller\BaseController;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class Header extends AbstractController
{
    public function show():Response{
        return $this->render('base/header.html.twig');
    }

}