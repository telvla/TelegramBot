<?php

namespace App\Helpers;

interface ImageInterface 
{
    public function getUrl() : bool;
    public function isUrl() : bool;
}