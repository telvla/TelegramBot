<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;


Route::get('/', function () {

    //$key = base64_decode(md5(uniqid()));
    //dd($key);
    //Log::debug($key);

});


/*
Route::get('/test-http', function () {
    Http::post('https://api.tlgr.org/bot');
});
*/