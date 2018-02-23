<?php

namespace App\SmallBlogSystem\TemplatesReturn;

/**
 * Class BasicTemplatesReturn
 * @package App\SmallBlogSystem\TemplatesReturn
 * @usage This is basic class for all TemplatesReturn classes.
 */
abstract class BasicTemplatesReturn
{
    /**
     * @param $param
     * @return mixed
     * @usage This function is return template any param.
     */
    public abstract static function get($param);
}