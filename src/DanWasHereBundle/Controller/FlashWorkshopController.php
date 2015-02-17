<?php

namespace DanWasHereBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FlashWorkshopController extends Controller
{
    public function indexAction()
    {

        return $this->render('DanWasHereBundle:FlashWorkshop:index.html.twig');
    }
}
