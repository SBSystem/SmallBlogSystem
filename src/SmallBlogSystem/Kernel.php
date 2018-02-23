<?php

namespace App\SmallBlogSystem;

use App\SmallBlogSystem\Managers\ConfigManager;
use App\SmallBlogSystem\Managers\LogManager;
use App\SmallBlogSystem\Level\LogLevel;

class Kernel
{
    private $logger;
    private $config;
    protected $successfullyInitialized;

    public function __construct()
    {
        $this->successfullyInitialized = false;
        $this->logger = null;
        $this->config = null;
        $this->initLogger();
        $this->initConfig();
    }

    private function initLogger()
    {
        $this->logger = new LogManager(__CLASS__);
    }
    public function log(LogLevel $priority, $logContent): boolean
    {
        if($this->successfullyInitialized) {
            $this->logger->log($priority, $logContent);
            return true;
        } else {
            return false;
        }
    }

    public function initConfig()
    {
        $this->config = new ConfigManager(__CLASS__);
    }
    public function returnConfig($param)
    {

    }
}