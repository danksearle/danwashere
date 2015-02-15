<?php

namespace DanWasHereBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class WelcomeController extends Controller
{
    public function indexAction()
    {

        return $this->render('DanWasHereBundle:Welcome:index.html.twig');
    }
}
