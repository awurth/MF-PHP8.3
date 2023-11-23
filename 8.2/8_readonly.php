<?php

readonly class Post
{
    public function __construct(
        public DateTime $createdAt,
    ) {}

    public function __clone()
    {
        $this->createdAt = clone $this->createdAt;
    }
}

$post = new Post(createdAt: new DateTime());

$clonedPost = clone $post;

var_dump($clonedPost->createdAt === $post->createdAt);
