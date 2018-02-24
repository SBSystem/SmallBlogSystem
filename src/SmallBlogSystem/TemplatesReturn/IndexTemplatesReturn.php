<?php

namespace App\SmallBlogSystem\TemplatesReturn;

class IndexTemplatesReturn extends BasicTemplatesReturn
{
    const ARRAY_INFO = array(
       'title' => 'Tytuł strony głównej'
    );

    public static function get($param)
    {
        return self::ARRAY_INFO[$param];
    }

}