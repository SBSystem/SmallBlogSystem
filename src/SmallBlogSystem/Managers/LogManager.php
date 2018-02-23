<?php

namespace App\SmallBlogSystem\Managers;

class LogManager extends BasicManager
{
    private $initialized;

    public  function __construct($class)
    {
        $this->initialized = false;
        if($class === "Kernel") {
            $this->init();
        }
    }
    public  function getManager()
    {
        return $this->initialized;
    }
    protected function init()
    {
        if(file_exists('log.txt')) {
            $this->initialized = true;
        } else {
            $this->initialized = false;
        }

    }
}