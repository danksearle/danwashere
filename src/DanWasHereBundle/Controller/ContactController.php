<?php

namespace DanWasHereBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ContactController extends Controller
{
    public function indexAction()
    {

        return $this->render('DanWasHereBundle:Contact:index.html.twig');
    }
}
