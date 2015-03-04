<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FlashWorkshopController extends Controller
{
    public function indexAction()
    {

        return $this->render('AppBundle:FlashWorkshop:index.html.twig');
    }
}
