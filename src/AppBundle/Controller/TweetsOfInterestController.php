<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TweetsOfInterestController extends Controller
{
    public function indexAction()
    {
        // Fetch some tweets then
        $tweets = $this->get('get_tweets');

        $query = array(
            'q'             => 'empleo barcelona php',
            'count'         => 30
        );

        $tweet_array = $tweets->getTweetsBySearch($query);

        $data = array(
            'tweet_array' => $tweet_array->statuses);

        return $this->render('AppBundle:TweetsOfInterest:index.html.twig', $data);
    }
}
