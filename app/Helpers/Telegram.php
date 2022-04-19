<?php

namespace App\Helpers;

class Telegram
{
    private $http;
    private $bot;
    const URL = 'https://api.tlgr.org/bot';

    public function __constructor(Http $http) 
    {
        $this->http = $http;
    }

    public function sendMessage() 
    {

    }
}
