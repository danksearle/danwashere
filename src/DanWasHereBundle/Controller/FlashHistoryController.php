<?php

namespace DanWasHereBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FlashHistoryController extends Controller
{
    public function indexAction()
    {

        return $this->render('DanWasHereBundle:FlashHistory:index.html.twig');
    }
}
