<?php

namespace App\SmallBlogSystem\Level;

class LogLevel
{
    const EMERGENCY = 'EMERGENCY';
    const ERROR     = 'ERROR';
    const INFO      = 'INFO';
    const KERNEL    = 'KERNEL';

    public function __toString(LogLevel $priority)
    {
        $textOutput = '';

        switch($priority)
        {
            case 'EMERGENCY':
                $textOutput = 'EMERGENCY';
            break;
            case 'ERROR':
                $textOutput = 'ERROR';
            break;
            case 'INFO':
                $textOutput = 'INFO';
            break;
            case 'KERNEL':
                $textOutput = 'KERNEL';
            break;
            default:
                $textOutput = '';
            break;
        }

        return $textOutput;
    }
}