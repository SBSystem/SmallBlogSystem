<?php

namespace App\SmallBlogSystem\TemplatesReturn;

/**
 * Class TwigTemplatesConfig
 * @package SmallBlogSystem\TemplatesReturn
 * This class is used to return basic variables to Twig files.
 */
class TwigTemplatesConfig
{
    /**
     * This const is used to display system version
     */
    const VERSION         = "0.0.1";
    /**
     * This const is used to display index page title
     */
    const TITLE           = 'SmallBlogSystem :: Welcome!';
    /**
     * This const is used to set charset in HTML.
     */
    const CHARSET         = 'UTF-8';
    /**
     * This const is used to set meta page author.
     */
    const PAGE_AUTHOR     = 'SmallBlogSystem -> Darmowy CMS';
    /**
     * This const is used to set meta generator.
     */
    const GENERATOR       = 'SmallBlogSystem v.'.self::VERSION;
}