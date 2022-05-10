<?php

namespace App\Helpers;

final class CheckImg 
{
    private $img;

    public function isExpansion() : bool 
    {
        return (preg_match('~^https?://\S+(?:jpg|jpeg|png)$~', $this->$img)) ? true : false;
    }

    public function isUrl() : bool 
    {
        $this->$img;

        return true;
    }

    public function isImg(string $img) : bool 
    {
        $this->$img = $img;

        return ($this->isExpansion() && $this->isUrl()) ? true : false;
    }
}