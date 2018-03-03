<?php

namespace App\SmallBlogSystem\Exception;

use Symfony\Component\Config\Definition\Exception\Exception;

class NoLevelException extends Exception
{
    public function __toString()
    {
        return '<b>NoLevelException:</b> No level given in '.$this->getMessage();
    }
}