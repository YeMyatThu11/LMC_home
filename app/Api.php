<?php
namespace App;

use GuzzleHttp\Client as GuzzleHttpClient;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7;
class Api{
    public function getNews(){
        try{
            $client= new GuzzleHttpClient();
            $apiRequest    = $client->request('GET', 'http://newsapi.org/v2/everything?q=laravel-news&sortBy=publishedAt&apiKey=0db8692c77ea4394a0a884a545e89478' );
            $content       = json_decode($apiRequest->getBody()->getContents(), true);
            return $content['articles'];

        }
        catch (RequestException $e) {
                //For handling exception
                echo Psr7\str($e->getRequest());
                if ($e->hasResponse()) {
                    echo Psr7\str($e->getResponse());
                }
            }
        }
}