<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;

Route::get('/start-message', function (\App\Helpers\Telegram $telegram) {
    $telegram->sendStartMessage(835916638);
});

Route::get('/img-prew', function (\App\Helpers\Telegram $telegram) {
    $telegram->sendPrewImg(835916638);
});

Route::get('/test-http', function (\App\Helpers\Telegram $telegram) {
    $telegram->sendMessage(835916638, '<b>Привет</b>');
});