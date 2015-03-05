<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class OddsAndSodsController extends Controller
{
    public function indexAction()
    {
        return $this->render('AppBundle:OddsAndSods:index.html.twig');
    }
}
