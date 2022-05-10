<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use App\Helpers\Telegram;

Route::get('/start-message', function (Telegram $telegram) {
    $telegram->sendStartMessage(835916638);
});

Route::get('/img-prew', function (Telegram $telegram) {
    $telegram->sendPrewImg(835916638);
});

Route::get('/test-http', function (Telegram $telegram) {
    $telegram->sendMessage(835916638, 'Send message');
});