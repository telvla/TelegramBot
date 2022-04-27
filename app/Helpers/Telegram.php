<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

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

    public function sendStartMessage(int $id_chat) : object
    {
        return Http::post($this->url.config('telegram_bot.name').'/sendMessage', [
            'chat_id' => $id_chat,
            'text' => (string)view('start-message'),
            'parse_mode' => 'html'
        ]);        
    }

    public function getCheckOreder() 
    {
        //подтвержения заказа
    }

    public function sendImg() 
    {

    }

    public function sendPrewImg(int $id_chat) : object
    {
        return Http::attach('document', Storage::get('/public/prew_img_test.jpg'), 'prew.jpg')
                    ->post($this->url.config('telegram_bot.name').'/sendMessage', [
                        'chat_id' => $id_chat
                    ]);        
    }

    public function sendMenu() 
    {
        //кнопки оформления заказа // помощь // цены //правила

    }

    public function getMessage() 
    {
        
    }


}
