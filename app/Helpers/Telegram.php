<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Http;

class Telegram
{
    private $http;
    private $url = 'https://api.tlgr.org/bot';

    public function __constructor(Http $http) 
    {
        $this->http = $http;
    }

    public function sendMessage(int $id_chat, string $message) : object
    {
        return Http::post($this->url.config('telegram_bot.name').'/sendMessage', [
            'chat_id' => $id_chat, //'835916638'
            'text' => $message,
            'parse_mode' => 'html'
        ]);
    }

    public function sendImg() 
    {

    }

    public function sendPrewImg() 
    {

    }

    public function getMessage() 
    {
        
    }
}
