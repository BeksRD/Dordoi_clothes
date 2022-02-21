<?php

namespace App\Controller\BaseController;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class Footer extends AbstractController
{
    public function show():Response{
        return $this->render('base/footer.html.twig');
    }

}