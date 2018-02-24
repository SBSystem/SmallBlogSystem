<?php

namespace App\SmallBlogSystem\Managers;

use App\SmallBlogSystem\Level\LogLevel;

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
    public  function getManager(): boolean
    {
        return $this->initialized;
    }
    protected function init(): boolean
    {
        if(file_exists('log.txt')) {
            $this->initialized = true;
            return true;
        } else {
            $this->initialized = false;
            return false;
        }

    }
    public function log(LogLevel $priority, $logValue): boolean
    {
        if($this->initialized === true) {
            $log = '['.$priority.'] '.$logValue;
            file_put_contents('log.txt', $log);
            return true;
        } else {
            return false;
        }
    }
}