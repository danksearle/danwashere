<?php

namespace AppBundle\Services;

use \Abraham\TwitterOAuth\TwitterOAuth;


class GetTweets
{
    protected $twitter_api_key;
    protected $twitter_api_secret;
    protected $twitter_access_token;
    protected $twitter_access_token_secret;

    public function __construct($twitter_api_key, $twitter_api_secret, $twitter_access_token, $twitter_access_token_secret) {
        $this->twitter_api_key = $twitter_api_key;
        $this->twitter_api_secret = $twitter_api_secret;
        $this->twitter_access_token = $twitter_access_token;
        $this->twitter_access_token_secret = $twitter_access_token_secret;
    }

    /**
     * Returns an array of tweets.
     * @param type $query_array e.g. 
     * $query = array( 
     *      'q' => 'barcelona',
     *      'result_type' => 'mixed'
     *  );
     * See https://dev.twitter.com/rest/reference/get/search/tweets for a list of parameters
     * @return array
     */
    public function getTweetsBySearch($query_array)
    {
        try {

            $twitter = new TwitterOAuth(
                $this->twitter_api_key,
                $this->twitter_api_secret,
                $this->twitter_access_token,
                $this->twitter_access_token_secret
            );

            return($twitter->get("search/tweets", $query_array));

        } catch (\Exception $e) {
            die($e->getMessage());
        }
    }

}
