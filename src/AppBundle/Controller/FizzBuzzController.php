<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FizzBuzzController extends Controller
{
    public function indexAction()
    {
        $fizz_buzz = $this->get('fizz_buzz');
        $fizz_buzz_array = $fizz_buzz->getFizzBuzzArray();

        $data = array(
            'fizz_buzz_array' => $fizz_buzz_array);

        return $this->render('AppBundle:FizzBuzz:index.html.twig', $data);
    }
}
