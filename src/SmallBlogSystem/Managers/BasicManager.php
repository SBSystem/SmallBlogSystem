<?php

namespace App\SmallBlogSystem\Managers;

/**
 * Class BasicManager
 * @package App\SmallBlogSystem\Managers
 * @usage This is basic class for all managers
 */
abstract class BasicManager
{
    /**
     * BasicManager constructor.
     * @param $class
     * @usage Constructor.
     */
    public abstract function __construct($class);

    /**
     * @param $class
     * @return mixed
     * @usage This function is used to initialize manager
     */
    protected abstract function init($class);

    /**
     * @return mixed
     * @usage This function is used to return information if manager is initialized
     */
    public abstract function getManager();
}