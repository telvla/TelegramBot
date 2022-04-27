<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

Route::get('/', function () {
    //$key = base64_decode(md5(uniqid()));
    //Log::debug($key);
});

Route::get('/start-message', function (\App\Helpers\Telegram $telegram) {
    $telegram->sendStartMessage(835916638);
});

Route::get('/test-http', function (\App\Helpers\Telegram $telegram) {
    $telegram->sendMessage(835916638, '<b>Привет</b>');
});