<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CommentsRepository")
 * @Orm\Table(name="comments")
 */
class Comment
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
        $datetime = new Datetime();
        $formatedDate = $datetime->format("Y-m-d H:i:s");
        $this->createdDate = $formatedDate;
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
    public function getCreatedBy(): string
    {
        return $this->createdBy;
    }
    /**
     * @param String $createdUserId
     * @return bool
     */
    public function setCreatedBy(String $createdUserId): void
    {
        $this->createdBy = $createdUserId;
    }
    /**
     * @return string
     */
    public function getCreatedDate(): DateTime
    {
        return $this->createdDate;
    }
}
