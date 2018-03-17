<?php

namespace App\SmallBlogSystem\TemplatesReturn;

/**
 * Class BasicTemplatesReturn
 * @package App\SmallBlogSystem\TemplatesReturn
 * @usage This is basic class for all TemplatesReturn classes.
 * @deprecated since version 0.0.1 to be removed in 0.1. Use new TwigTemplatesConfig file.
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