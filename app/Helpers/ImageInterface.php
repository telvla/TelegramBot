<?php

namespace App\Helpers;

interface ImageInterface 
{
    public function isImg() : bool;
    public function isUrl() : bool;
}