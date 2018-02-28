<?php

namespace App\SmallBlogSystem\TemplatesReturn;

use App\SmallBlogSystem\Managers\config;

class IndexTemplatesReturn extends BasicTemplatesReturn
{
    const ARRAY_INFO = array(
       'title' => 'Tytuł strony głównej',
        'charset' => 'UTF-8',
        'pageAuthor' => 'Author',
        'generator' => 'GENERATOR'
    );

    public static function get($param)
    {
        return self::ARRAY_INFO[$param];
    }

}