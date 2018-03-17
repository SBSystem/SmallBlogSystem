<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PostsRepository")
 */
class Posts
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
    private $postTitle;

    /**
     * @ORM\Column(type="string")
     */
    private $postText;

    /**
     * @ORM\Column(type="integer")
     */
    private $categoryId;

    /**
     * @ORM\Column(type="string")
     */
    private $createdBy;

    /**
     * @ORM\Column(type="datetime")
     */
    private $createdDate;


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
    public function setId(int $id): bool
    {
        $this->id = $id;
        return true;
    }

    /**
     * @return string
     */
    public function getPostTitle(): string
    {
        return $this->postTitle;
    }

    /**
     * @param String $postTitle
     * @return bool
     */
    public function setPostTitle(String $postTitle): bool
    {
        $this->postTitle = $postTitle;
        return true;
    }

    /**
     * @return string
     */
    public function getPostText(): string
    {
        return $this->postText;
    }

    /**
     * @param String $postText
     * @return bool
     */
    public function setPostText(String $postText): bool
    {
        $this->postText = $postText;
        return true;
    }

    /**
     * @return int
     */
    public function getCategoryId(): int
    {
        return $this->categoryId;
    }

    /**
     * @param int $categoryId
     * @return bool
     */
    public function setCategoryId(int $categoryId): bool
    {
        $this->categoryId = $categoryId;
        return true;
    }

    /**
     * @return string
     */
    public function getCreatedBy(): string
    {
        return $this->createdBy;
    }

    /**
     * @param String $createdBy
     * @return bool
     */
    public function setCreatedBy(String $createdBy): bool
    {
        $this->createdBy = $createdBy;
        return true;
    }

    /**
     * @return string
     */
    public function getCreatedDate(): string
    {
        return $this->createdDate;
    }

    /**
     * @param String $createdDate
     * @return bool
     */
    public function setCreatedDate(String $createdDate): bool
    {
        $this->createdDate = $createdDate;
        return true;
    }

}
