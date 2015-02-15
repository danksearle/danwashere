<?php

namespace DanWasHereBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PortfolioController extends Controller
{
    public function indexAction()
    {

        return $this->render('DanWasHereBundle:Portfolio:index.html.twig');
    }
}
