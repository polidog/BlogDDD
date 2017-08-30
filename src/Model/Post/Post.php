<?php


namespace Polidog\Blog\Model\Post;

use PHPMentors\DomainKata\Entity\EntityInterface;

final class Post implements EntityInterface
{
    /**
     * @var int
     */
    private $postId;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $content;

    /**
     * @var \DateTime
     */
    private $displayDate;

    /**
     * @var Author
     */
    private $author;

    /**
     * @var PostStatus
     */
    private $status;

    /**
     * @param            $title
     * @param            $content
     * @param \DateTime  $displayDate
     * @param Author     $author
     * @param PostStatus $postStatus
     */
    public function __construct($title, $content, \DateTime $displayDate, Author $author, PostStatus $postStatus)
    {
        $this->title = $title;
        $this->content = $content;
        $this->displayDate = $displayDate;
        $this->author = $author;
        $this->status = $postStatus;
    }

    /**
     * @return int
     */
    public function getPostId(): ?int
    {
        return $this->postId;
    }

    /**
     * @param int $postId
     * @return $this
     */
    public function setPostId(int $postId)
    {
        $this->postId = $postId;
        return $this;
    }



}