<?php

namespace App\SmallBlogSystem;

use App\SmallBlogSystem\Level\KernelStartInfo;
use App\SmallBlogSystem\Managers\ConfigManager;
use App\SmallBlogSystem\Managers\LogManager;
use App\SmallBlogSystem\Level\LogLevel;

/**
 * Class Kernel
 * @package App\SmallBlogSystem
 * This class is basic class of system. It may loaded in every template.
 */
class Kernel
{
    private $logger;
    private $config;
    protected $successfullyInitialized;

    /**
     * Kernel constructor.
     * @param $info
     */
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

    /**
     * @param $kernelStatus
     * @return bool
     */
    public function changeSystemStatus($kernelStatus): bool
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
        return true;
    }

    /**
     * @return bool
     */
    protected function boot(): bool
    {
        $this->successfullyInitialized = true;
        $this->initLogger();
        $this->initConfig();
        return true;
    }

    /**
     * @return bool
     */
    protected function reboot(): bool
    {
        $this->shutdown();
        $this->boot();
        return true;
    }

    /**
     * @return bool
     */
    protected function shutdown(): bool
    {
        $this->successfullyInitialized = false;
        return true;
    }

    /**
     * @return bool
     */
    private function initLogger(): bool
    {
        $this->logger = new LogManager();
        $this->logger->log(LogLevel::KERNEL, 'System loaded.');
        return true;
    }

    /**
     * @param $priority
     * @param $logContent
     * @return bool
     * @deprecated since version 0.0.1, to be removed in 0.1. Use new ConfigManager object
     */
    public function log($priority, $logContent): bool
    {
        trigger_error(sprintf('Function %s is deprecated!', __METHOD__));

        if($this->successfullyInitialized) {
            $this->logger->log($priority, $logContent);
            return true;
        } else {
            return false;
        }
    }
    /**
     * @return bool
     */
    public function initConfig(): bool
    {
        $this->config = new ConfigManager();
        return true;
    }
    /**
     * @param $param
     * @return bool
     * @deprecated since version 0.0.1, to be removed in 0.1. Use new ConfigManager object.
     */
    public function returnConfig($param): bool
    {
        trigger_error(sprintf('Function %s is deprecated!', __METHOD__));
        return true;
    }
}
