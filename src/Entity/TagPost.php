<?php

namespace SovicCms\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SovicCms\Entity\TagPost
 *
 * @ORM\Table(name="tags_posts")
 * @ORM\Entity
 */
class TagPost
{
    /**
     * @ORM\Column(name="posts_id", type="integer")
     * @ORM\Id
     */
    protected int $postId;

    /**
     * @ORM\Column(name="tags_id", type="integer")
     * @ORM\Id
     */
    protected int $tagId;

    public function getPostId(): int
    {
        return $this->postId;
    }

    public function setPostId(int $postId): void
    {
        $this->postId = $postId;
    }

    public function getTagId(): int
    {
        return $this->tagId;
    }

    public function setTagId(int $tagId): void
    {
        $this->tagId = $tagId;
    }
}
