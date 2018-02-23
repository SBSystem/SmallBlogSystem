<?php

namespace App\SmallBlogSystem\ServiceProvider;

/**
 * Class BasicServiceProvider
 * @package App\SmallBlogSystem\ServiceProvider
 * @usage Basic class for all ServiceProviders.
 */
abstract class BasicServiceProvider
{
    /**
     * BasicServiceProvider constructor.
     * @param $class
     * @usage Constructor.
     */
    public abstract function __construct($class);

    /**
     * @param $class
     * @return mixed
     * @usage This function is used to initialize your ServiceProvider
     */
    protected abstract function init($class);

    /**
     * @return mixed
     * @usage This function is used to return if ServiceProvider is initialized.
     */
    public abstract function getServiceProvider();
}