<?php

namespace App\SmallBlogSystem\Managers;

class config
{
    private static $array = [
        'databaseType' => 'mysql',
        'databaseHost' => 'localhost',
        'databaseUser' => 'root',
        'databasePass' => 'root',
        'databaseName' => 'smallblogsystem',
        'databasePort' => 1666
    ];

    public static function getConfigArray($class)
    {
        if($class === "Kernel") {
            return config::$array;
        }
    }
}