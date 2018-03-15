<?php

use App\SmallBlogSystem\Kernel;

class KernelTest extends PHPUnit_Framework_TestCase
{
    public function testKernelSystemShutdownStatus()
    {
        $kernel = new Kernel(\App\SmallBlogSystem\Level\KernelStartInfo::BOOT);
        $setShutdownStatus = $kernel->changeSystemStatus(\App\SmallBlogSystem\Level\KernelStartInfo::SHUTDOWN);
        $this->assertTrue($setShutdownStatus);
    }
    public function testKernelSystemRebootStatus()
    {
        $kernel = new Kernel(\App\SmallBlogSystem\Level\KernelStartInfo::BOOT);
        $setRebootStatus = $kernel->changeSystemStatus(\App\SmallBlogSystem\Level\KernelStartInfo::REBOOT);
        $this->assertTrue($setRebootStatus);
    }
    public function testKernelSystemBootStatus()
    {
        $kernel = new Kernel(\App\SmallBlogSystem\Level\KernelStartInfo::BOOT);
        $setBootStatus = $kernel->changeSystemStatus(\App\SmallBlogSystem\Level\KernelStartInfo::BOOT);
        $this->assertTrue($setBootStatus);
    }
}
