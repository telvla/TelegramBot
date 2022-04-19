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
        return Http::post(URL.config('telegram_bot.name').'/sendMessage', [
            'chat_id' => '835916638',
            'text' => 'Hi',
            'parse_mode' => 'html'
        ]);
    }
}
