<?php

namespace App\SmallBlogSystem\Exception;

class NoLevelException extends Exception
{
    public function __toString()
    {
        return '<b>NoLevelException:</b> No level given in '.$this->getMessage();
    }
}