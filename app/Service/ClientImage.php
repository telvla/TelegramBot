<?php

namespace App\Service;

use App\Helpers\ImageInterface;

class ClientImage implements ImageInterface
{
    private $img;

    public function __construct(string $img) 
    {
        $this->img = $img;
    }

    public function isImg() : bool
    {
        //проверка корректного урл и проверка существования изображения
    }

    public function getUrl() : string {

        return $this->img;
    }
}