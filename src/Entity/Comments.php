<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CommentsRepository")
 * @ORM\Table
 */
class Comments
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length="512")
     */
    private $commentText;

    /**
     * @ORM\Column(type="integer")
     */
    private $postId;

    /**
     * @ORM\Column(type="string")
     */
    private $createdBy;

    /**
     * @ORM\Column(type="datetime")
     */
    private $createdDate;

    public function __construct()
    {
        $this->createdBy = date("Y-m-d H:i:s");
    }
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
    public function getCommentText(): string
    {
        return $this->commentText;
    }

    /**
     * @param String $commentText
     * @return bool
     */
    public function setCommentText(String $commentText): bool
    {
        $this->commentText = $commentText;
        return true;
    }

    /**
     * @return int
     */
    public function getPostId(): int
    {
        return $this->postId;
    }

    /**
     * @param int $postId
     * @return bool
     */
    public function setPostId(int $postId): bool
    {
        $this->postId = $postId;
        return true;
    }

    /**
     * @return string
     */
    public function getCreatedBy(): DateTime
    {
        return $this->createdBy;
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
