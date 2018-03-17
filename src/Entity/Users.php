<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UsersRepository")
 */
class Users
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $username;

    /**
     * @ORM\Column(type="string")
     */
    private $password;

    /**
     * @ORM\Column(type="string")
     */
    private $mail;

    /**
     * @ORM\Column(type="datetime")
     */
    private $registrationDate;

    /**
     * @ORM\Column(type="string")
     */
    private $avatar;

    /**
     * @ORM\Column(type="string")
     */
    private $role;

    /**
     * @ORM\Column(type="integer")
     */
    private $code;

    /**
     * @ORM\Column(type="integer")
     */
    private $blocked;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getUsername(): string
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
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param String $password
     * @return bool
     */
    public function setPassword(String $password): bool
    {
        $this->password = $password;
        return true;
    }

    /**
     * @return string
     */
    public function getMail(): string
    {
        return $this->mail;
    }

    /**
     * @param String $mail
     * @return bool
     */
    public function setMail(String $mail): bool
    {
        $this->mail = $mail;
        return true;
    }

    /**
     * @return string
     */
    public function getRegistrationDate(): string
    {
        return $this->registrationDate;
    }

    /**
     * @param String $registrationDate
     * @return bool
     */
    public function setRegistrationDate(String $registrationDate): bool
    {
        $this->registrationDate = $registrationDate;
        return true;
    }

    /**
     * @return string
     */
    public function getAvatar(): string
    {
        return $this->avatar;
    }

    /**
     * @param String $avatar
     * @return bool
     */
    public function setAvatar(String $avatar): bool
    {
        $this->avatar = $avatar;
        return true;
    }

    /**
     * @return string
     */
    public function getRole(): string
    {
        return $this->role;
    }

    /**
     * @param String $role
     * @return string
     */
    public function setRole(String $role): string
    {
        $this->role = $role;
        return true;
    }

    /**
     * @return int
     */
    public function getCode(): int
    {
        return $this->code;
    }

    /**
     * @param int $code
     * @return bool
     */
    public function setCode(int $code): bool
    {
        $this->code = $code;
        return true;
    }

    /**
     * @return int
     */
    public function getBlocked(): int
    {
        return $this->blocked;
    }

    /**
     * @param int $blocked
     * @return bool
     */
    public function setBlocked(int $blocked): bool
    {
        $this->blocked = $blocked;
        return true;
    }


}
