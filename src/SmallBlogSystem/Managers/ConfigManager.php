<?php

namespace App\SmallBlogSystem\Managers;

class ConfigManager extends BasicManager
{
    private $initialized;

    public function __construct()
    {
        $this->initialized = false;
        $this->init();
    }
    public  function getManager()
    {
        return $this->initialized;
    }
    public function init()
    {
        if(file_exists('config.php')) {
            $this->initialized = true;
        } else {
            $this->initialized = false;
        }
    }
    public function getParam($param)
    {
        if($this->initialized === true) {
            $configArray = config::getConfigArray();
            return $configArray($param);;
        } else {
            return false;
        }
    }
}