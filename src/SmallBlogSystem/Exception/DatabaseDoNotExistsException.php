<?php

namespace App\SmallBlogSystem\Exception;

use Symfony\Component\Config\Definition\Exception\Exception;

class DatabaseDoNotExistsException extends \Exception
{
    public function __construct($messageText)
    {
        parent::__construct('DatabaseDoNotExistsException: No database found '.$messageText);
    }
}
