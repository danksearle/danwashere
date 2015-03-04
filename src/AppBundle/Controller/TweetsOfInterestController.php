<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TweetsOfInterestController extends Controller
{
    public function indexAction()
    {
        // Fetch some tweets then
        $tweets = $this->get('get_tweets');
        $tweet_array = $tweets->getTweets();

        $data = array(
            'tweet_array' => $tweet_array);

        return $this->render('AppBundle:TweetsOfInterest:index.html.twig', $data);
    }
}
