<?php

namespace App\SmallBlogSystem;

use App\SmallBlogSystem\Level\KernelStartInfo;
use App\SmallBlogSystem\Managers\ConfigManager;
use App\SmallBlogSystem\Managers\LogManager;
use App\SmallBlogSystem\Level\LogLevel;

class Kernel
{
    private $logger;
    private $config;
    protected $successfullyInitialized;

    public function __construct($info)
    {
        $this->successfullyInitialized = false;
        $this->logger = null;
        $this->config = null;
        if ($info === KernelStartInfo::BOOT) {
            $this->boot();
        } else if ($info === KernelStartInfo::REBOOT) {
            $this->reboot();
        } else if ($info === KernelStartInfo::SHUTDOWN) {
            $this->shutdown();
        } else {
            $this->boot();
        }
    }
    public function changeSystemStatus($kernelStatus)
    {
        if ($kernelStatus === KernelStartInfo::BOOT) {
            $this->boot();
        } else if ($kernelStatus === KernelStartInfo::REBOOT) {
            $this->reboot();
        } else if ($kernelStatus === KernelStartInfo::SHUTDOWN) {
            $this->shutdown();
        } else {
            $this->boot();
        }
    }
    protected function boot()
    {
        $this->successfullyInitialized = true;
        $this->initLogger();
        $this->initConfig();

    }
    protected function reboot()
    {
        $this->shutdown();
        $this->boot();
    }
    protected function shutdown()
    {
        $this->successfullyInitialized = false;
    }

    private function initLogger()
    {
        $this->logger = new LogManager(__CLASS__);
        $this->logger->log(LogLevel::KERNEL, 'System loaded.');
    }
    public function log($priority, $logContent): boolean
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
