<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CategoriesRepository")
 * @ORM\Table
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
     * @ORM\Column(type="string", length="100")
     */
    private $categoryName;

    /**
     * @ORM\Column(type="string", length="30")
     */
    private $categoryShortName;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return bool
     */
    public function setId(int $id): void
    {
        $this->id = $id;
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
    public function setCategoryName(String $categoryName): void
    {
        $this->categoryName = $categoryName;
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
    public function setCategoryShortName(String $categoryShortName): void
    {
        $this->categoryShortName = $categoryShortName;
    }
}
