<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CategoriesRepository")
 */
class Categories
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
    private $categoryName;

    /**
     * @ORM\Column(type="string")
     */
    private $categoryShortName;

    /**
     * @return mixed
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return bool
     */
    public function setId(int $id): bool
    {
        $this->id = $id;
        return true;
    }

    /**
     * @return string
     */
    public function getCategoryName(): string
    {
        return $this->categoryName;
    }

    /**
     * @param String $categoryName
     * @return bool
     */
    public function setCategoryName(String $categoryName): bool
    {
        $this->categoryName = $categoryName;
        return true;
    }

    /**
     * @return string
     */
    public function getCategoryShortName(): string
    {
        return $this->categoryShortName;
    }

    /**
     * @param String $categoryShortName
     * @return bool
     */
    public function setCategoryShortName(String $categoryShortName): bool
    {
        $this->categoryShortName = $categoryShortName;
        return true;
    }
}
