<?php

namespace App\SmallBlogSystem\TemplatesReturn;

use App\SmallBlogSystem\Managers\config;

/**
 * Class IndexTemplatesReturn
 * @package App\SmallBlogSystem\TemplatesReturn
 * @deprecated since version 0.0.1 to be removed in 0.1. Use new TwigTemplatesConfig file.
 */
class IndexTemplatesReturn extends BasicTemplatesReturn
{
    const ARRAY_INFO = array(
       'title' => 'Tytuł strony głównej',
        'charset' => 'UTF-8',
        'pageAuthor' => 'Author',
        'generator' => 'SmallBlogSystem'
    );

    public static function get($param)
    {
        return self::ARRAY_INFO[$param];
    }

}