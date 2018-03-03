<?php

namespace App\SmallBlogSystem\Managers;

class LogManager extends BasicManager
{
    private $initialized;

    public  function __construct()
    {
        $this->initialized = false;
            $this->init();
    }
    public  function getManager(): bool
    {
        return $this->initialized;
    }
    protected function init(): bool
    {
        if(file_exists('log.txt')) {
            $this->initialized = true;
            return true;
        } else {
            $this->initialized = false;
            return false;
        }

    }
    public function log($priority, $logValue): bool
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
