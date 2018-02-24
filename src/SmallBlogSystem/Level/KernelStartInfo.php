<?php

namespace App\SmallBlogSystem\Level;

class KernelStartInfo
{
    const BOOT     = 'BOOT';
    const REBOOT   = 'REBOOT';
    const SHUTDOWN = 'SHUTDOWN';

    public function __toString(KernelStartInfo $ksi)
    {
        $returnString = '';
        switch($ksi)
        {
            case 'BOOT':
                $returnString = 'BOOT';
            break;
            case 'REBOOT':
                $returnString = 'REBOOT';
            break;
            case 'SHUTDOWN':
                $returnString = 'SHUTDOWN';
            break;
            default:
                $returnString = '';
            break;
        }
        return $returnString;
    }
}