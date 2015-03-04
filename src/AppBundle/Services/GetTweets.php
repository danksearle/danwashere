<?php

namespace AppBundle\Services;

class GetTweets
{
    protected $twitter_api_key;
    protected $twitter_api_secret;

    public function __construct($twitter_api_key, $twitter_api_secret) {

        $this->twitter_api_key = $twitter_api_key;
        $this->twitter_api_secret = $twitter_api_secret;
    }

    public function getTweets()
    {

        try {
            $tweets = $this->getFreshTweets();

            return $tweets;

        } catch (\Exception $e) {
            die($e->getMessage());
        }
    }

    private function getFreshTweets()
    {
        // Following instructions on this page:
        // https://dev.twitter.com/oauth/application-only

        // Encode consumer key and secret and combine them
        $key_and_secret = rawurlencode($this->twitter_api_key) . ':' . rawurlencode($this->twitter_api_secret);

        // Obtain a bearer token
        $opts = 
            array('http' =>
                array(
                    'ignore_errors' => 'true', // Prevent 403 errors from triggering a 500 error in Symfony
                    'method'  => 'POST',
                    'header'  => "Authorization: Basic " . base64_encode($key_and_secret) . "\nContent-Type: application/x-www-form-urlencoded;charset=UTF-8",
                    'content' => 'grant_type=client_credentials'
                )
            );

        $context  = stream_context_create($opts);

        try {
            $result = file_get_contents('https://api.twitter.com/oauth2/token', false, $context);
        } catch(\Exception $e) {
            throw new \Exception('Failed to connect to Twitter API, trying to authenticate');
        }

        if($result === false){
            throw new \Exception('Failed to connect to Twitter API, trying to authenticate');
        }

        // Validate the resulting JSON
        $response_array = json_decode($result);

        if(!empty($response_array->errors) && is_array($response_array->errors)) {
            throw new \Exception('Oh dear, Twitter says: ' . $response_array->errors[0]->message . 
                ' (code ' . $response_array->errors[0]->code . ', ' . $response_array->errors[0]->label . ')');
        }

        if(empty($response_array->token_type) || $response_array->token_type != 'bearer') {
            throw new \Exception('Oh dear, the token_type wasn\'t "bearer". It was "' . $response_array->token_type . '".');
        }

        // Now we have the access_token in $response_array->access_token

/*
        // Authenticate API requests with the bearer token
        $opts = 
            array('http' =>
                array(
                    'ignore_errors' => 'true', // Prevent 403 errors from triggering a 500 error in Symfony
                    'header'  => "Authorization: Bearer " . base64_encode($response_array->access_token)
                )
            );

        $context  = stream_context_create($opts);

        try {
            $result = file_get_contents('https://api.twitter.com/1.1/statuses/user_timeline.json?count=10&screen_name=danksearle', false, $context);
        } catch(\Exception $e) {
            throw new \Exception('Failed to connect to Twitter API, trying to fetch tweets.');
        }

        if($result === false){
            throw new \Exception('Failed to connect to Twitter API, trying to fetch tweets.');
        }

        // Validate the resulting JSON
        $response_array = json_decode($result);

        if(!empty($response_array->errors) && is_array($response_array->errors)) {
            throw new \Exception('Oh dear, Twitter says: ' . $response_array->errors[0]->message . 
                ' (code ' . $response_array->errors[0]->code . ')');
        }

        die($result);
*/




        // Create a new cURL resource
        $ch = curl_init();

        // Set URL and other appropriate options
        curl_setopt($ch, CURLOPT_URL, "https://api.twitter.com/1.1/statuses/user_timeline.json?count=100&screen_name=twitterapi");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
        curl_setopt($ch, CURLOPT_HEADER, false); 
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            "Authorization: Bearer " . base64_encode($response_array->access_token)
            )); 
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

        // grab URL and pass it to the browser
        if($thetweets = curl_exec($ch) === false) {
            throw new \Exception('Oh dear, Twitter says: ' . curl_error($ch));
        }

        // close cURL resource, and free up system resources
        curl_close($ch);

        $thetweets_array = json_decode($thetweets);


        print_r($thetweets_array);

        die("<br>DONE I GUESS");


        return $thetweets_array;

    }



}
