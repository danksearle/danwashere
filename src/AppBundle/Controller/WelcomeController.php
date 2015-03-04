<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class WelcomeController extends Controller
{
    public function indexAction()
    {

        return $this->render('AppBundle:Welcome:index.html.twig', array(
        	'age' => (date("Y") - 1973)

        	));
    }
}
