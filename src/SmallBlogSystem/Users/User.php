<?php

namespace App\SmallBlogSystem\Users;

/**
 * Class User
 * @package App\SmallBlogSystem\Users
 */
class User
{
    /**
     * @var String
     */
    private $username;
    /**
     * @var String
     */
    private $role;

    /**
     * User constructor.
     * @param String $username
     * @param String $role
     */
    public function __construct(String $username, String $role)
    {
        $this->username = $username;
        $this->role = $role;
        return true;
    }

    /**
     * @return String
     */
    public function getUsername(): String
    {
        return $this->username;
    }

    /**
     * @param String $username
     * @return bool
     */
    public function setUsername(String $username): bool
    {
        $this->username = $username;
        return true;
    }

    /**
     * @return String
     */
    public function getRole(): String
    {
        return $this->role;
    }

    /**
     * @param String $role
     * @return bool
     */
    public function setRole(String $role): bool
    {
        $this->role = $role;
        return true;
    }
}